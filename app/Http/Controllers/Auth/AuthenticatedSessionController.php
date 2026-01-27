<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request (secured with rate limiting).
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $throttleKey = Str::lower($request->input('email')) . '|' . $request->ip();

        // ⛔ Rate limit login attempts (5 attempts per 60 seconds)
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            throw ValidationException::withMessages([
                'email' => 'Terlalu banyak percobaan login. Coba lagi dalam beberapa menit.',
            ]);
        }

        // ⛔ Unified error message for security (don't reveal if email exists)
        if (! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            RateLimiter::hit($throttleKey, 60);

            throw ValidationException::withMessages([
                'email' => 'Email atau kata sandi salah.',
            ]);
        }

        // Clear rate limiter on successful login
        RateLimiter::clear($throttleKey);

        $request->session()->regenerate();

        $user = Auth::user();

        // ⛔ Optional: Check user status if exists in database
        if (method_exists($user, 'getAttribute') && $user->getAttribute('status') === 'blokir') {
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => 'Akun Anda diblokir. Hubungi administrator.',
            ]);
        }

        // Clear intended URL to prevent redirect issues
        $request->session()->forget('url.intended');

        return redirect()->route('admin.dashboard')->with('success', 'Login berhasil.');
    }

    /**
     * Redirect the user to the Google authentication page.
     */
    public function redirect()
    {
        return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }

    /**
     * Handle callback from Google and authenticate the user locally.
     * ⛔ Only allows registered users to login (no auto-registration).
     */
    public function callback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')
                ->stateless()
                ->user();
        } catch (\Throwable $e) {
            return redirect()->route('login')
                ->withErrors(['email' => 'Login Google gagal. Silakan coba lagi.']);
        }

        // ⛔ Only allow registered users to login (security measure)
        $user = User::where('email', $googleUser->email)->first();

        if (! $user) {
            return redirect()->route('login')
                ->withErrors(['email' => 'Email tidak terdaftar. Hubungi administrator untuk registrasi.']);
        }

        // ⛔ Check user status before allowing login
        if (method_exists($user, 'getAttribute') && $user->getAttribute('status') === 'blokir') {
            return redirect()->route('login')
                ->withErrors(['email' => 'Akun Anda diblokir. Hubungi administrator.']);
        }

        // Update Google credentials for existing user
        $user->update([
            'google_id' => $googleUser->id,
            'google_token' => $googleUser->token ?? null,
            'google_refresh_token' => $googleUser->refreshToken ?? null,
            'avatar' => $googleUser->avatar ?? $user->avatar,
        ]);

        // Login user with remember token
        Auth::login($user, true);

        $request->session()->regenerate();

        // Clear intended URL to prevent redirect issues
        $request->session()->forget('url.intended');

        return redirect()->route('admin.dashboard')->with('success', 'Login berhasil.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
