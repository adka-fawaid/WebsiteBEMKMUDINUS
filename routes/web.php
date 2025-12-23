<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
* ADMIN CONTROLLER
*/
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\SambutanPresmaAdminController;
use App\Http\Controllers\Admin\VisiMisiAdminController;
use App\Http\Controllers\Admin\KabinetAdminController;
use App\Http\Controllers\Admin\StrukturalAdminController;
use App\Http\Controllers\Admin\ProgramKerjaAdminController;
use App\Http\Controllers\Admin\PendaftaranAdminController;
use App\Http\Controllers\Admin\BeritaAdminController;
use App\Http\Controllers\Admin\PartnershipAdminController;
use App\Http\Controllers\Admin\KontakAdminController;

/*
* OLD CONTROLLER
*/
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\UkmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
* AUTHENTICATION ROUTES
*/
require __DIR__ . '/auth.php';

/*
* ADMIN ROUTES
*/
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // DASHBOARD
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])
            ->name('admin.dashboard');

        // SAMBUTAN PRESMA
        Route::prefix('sambutan-presma')->group(function () {
            Route::get('/', [SambutanPresmaAdminController::class, 'index'])
                ->name('admin.sambutan-presma.index');
        });

        // VISI MISI
        Route::prefix('visi-misi')->group(function () {
            Route::get('/', [VisiMisiAdminController::class, 'index'])
                ->name('admin.visi-misi.index');
        });

        // KABINET
        Route::prefix('kabinet')->group(function () {
            Route::get('/', [KabinetAdminController::class, 'index'])
                ->name('admin.kabinet.index');
        });

        // STRUKTURAL
        Route::prefix('struktural')->group(function () {
            Route::get('/', [StrukturalAdminController::class, 'index'])
                ->name('admin.struktural.index');
        });

        // PROGRAM KERJA
        Route::prefix('program-kerja')->group(function () {
            Route::get('/', [ProgramKerjaAdminController::class, 'index'])
                ->name('admin.program-kerja.index');
        });

        // PENDAFTARAN
        Route::prefix('pendaftaran')->group(function () {
            Route::get('/', [PendaftaranAdminController::class, 'index'])
                ->name('admin.pendaftaran.index');
        });

        // BERITA
        Route::prefix('berita')->group(function () {
            Route::get('/', [BeritaAdminController::class, 'index'])
                ->name('admin.berita.index');
        });

        // PARTNERSHIP
        Route::prefix('partnership')->group(function () {
            Route::get('/', [PartnershipAdminController::class, 'index'])
                ->name('admin.partnership.index');
        });

        // KONTAK
        Route::prefix('kontak')->group(function () {
            Route::get('/', [KontakAdminController::class, 'index'])
                ->name('admin.kontak.index');
        });
    });
});

/*
* OLD ROUTES
*/
Route::get('/', [AppController::class, 'index']);


Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/foto', [AppController::class, 'foto']);

Route::get('/calendar', [AppController::class, 'calendar']);

Route::get('/partnership', [AppController::class, 'partnership']);

Route::get('/detail_partnership/{slug}', [AppController::class, 'detail_partnership']);

Route::get('/forum', [AppController::class, 'forum']);

Route::get('/detail_forum/{slug}', [AppController::class, 'detail_forum']);

Route::get('/kabinet', [AppController::class, 'kabinet']);

Route::get('/detail_kabinet/{slug}', [AppController::class, 'detail_kabinet']);

Route::get('/proker', [AppController::class, 'proker']);

Route::get('/detail_proker/{slug}', [AppController::class, 'detail_proker']);

Route::get('/ormawa', [AppController::class, 'ormawa']);

Route::get('/detail_ormawa/{slug}', [AppController::class, 'detail_ormawa']);

Route::get('/ukm', [AppController::class, 'ukm']);

Route::get('/detail_ukm/{slug}', [AppController::class, 'detail_ukm']);

// Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/partner', [PartnershipController::class, 'index'])->name('partner')->middleware('auth');
Route::get('/partner/create', [PartnershipController::class, 'create'])->name('partner.create')->middleware('auth');
Route::post('/partner/store', [PartnershipController::class, 'store'])->name('partner.store')->middleware('auth');
Route::get('/partner/edit/{id}', [PartnershipController::class, 'edit'])->name('partner.edit')->middleware('auth');
Route::post('/partner/update/{id}', [PartnershipController::class, 'update'])->name('partner.update')->middleware('auth');
Route::post('/partner/destroy/{id}', [PartnershipController::class, 'destroy'])->name('partner.destroy')->middleware('auth');

Route::get('/riset', [ForumController::class, 'index'])->name('riset')->middleware('auth');
Route::get('/riset/create', [ForumController::class, 'create'])->name('riset.create')->middleware('auth');
Route::post('/riset/store', [ForumController::class, 'store'])->name('riset.store')->middleware('auth');
Route::get('/riset/edit/{id}', [ForumController::class, 'edit'])->name('riset.edit')->middleware('auth');
Route::post('/riset/update/{id}', [ForumController::class, 'update'])->name('riset.update')->middleware('auth');
Route::post('/riset/destroy/{id}', [ForumController::class, 'destroy'])->name('riset.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/kementerian', [KabinetController::class, 'index'])->name('kementerian')->middleware('auth');
Route::get('/kementerian/create', [KabinetController::class, 'create'])->name('kementerian.create')->middleware('auth');
Route::post('/kementerian/store', [KabinetController::class, 'store'])->name('kementerian.store')->middleware('auth');
Route::get('/kementerian/edit/{id}', [KabinetController::class, 'edit'])->name('kementerian.edit')->middleware('auth');
Route::post('/kementerian/update/{id}', [KabinetController::class, 'update'])->name('kementerian.update')->middleware('auth');
Route::post('/kementerian/destroy/{id}', [KabinetController::class, 'destroy'])->name('kementerian.destroy')->middleware('auth');

Route::get('/rkt', [ProkerController::class, 'index'])->name('rkt')->middleware('auth');
Route::get('/rkt/create', [ProkerController::class, 'create'])->name('rkt.create')->middleware('auth');
Route::post('/rkt/store', [ProkerController::class, 'store'])->name('rkt.store')->middleware('auth');
Route::get('/rkt/edit/{id}', [ProkerController::class, 'edit'])->name('rkt.edit')->middleware('auth');
Route::post('/rkt/update/{id}', [ProkerController::class, 'update'])->name('rkt.update')->middleware('auth');
Route::post('/rkt/destroy/{id}', [ProkerController::class, 'destroy'])->name('rkt.destroy')->middleware('auth');

Route::get('/organisasi', [OrmawaController::class, 'index'])->name('organisasi')->middleware('auth');
Route::get('/organisasi/create', [OrmawaController::class, 'create'])->name('organisasi.create')->middleware('auth');
Route::post('/organisasi/store', [OrmawaController::class, 'store'])->name('organisasi.store')->middleware('auth');
Route::get('/organisasi/edit/{id}', [OrmawaController::class, 'edit'])->name('organisasi.edit')->middleware('auth');
Route::post('/organisasi/update/{id}', [OrmawaController::class, 'update'])->name('organisasi.update')->middleware('auth');
Route::post('/organisasi/destroy/{id}', [OrmawaController::class, 'destroy'])->name('organisasi.destroy')->middleware('auth');

Route::get('/unit', [UkmController::class, 'index'])->name('unit')->middleware('auth');
Route::get('/unit/create', [UkmController::class, 'create'])->name('unit.create')->middleware('auth');
Route::post('/unit/store', [UkmController::class, 'store'])->name('unit.store')->middleware('auth');
Route::get('/unit/edit/{id}', [UkmController::class, 'edit'])->name('unit.edit')->middleware('auth');
Route::post('/unit/update/{id}', [UkmController::class, 'update'])->name('unit.update')->middleware('auth');
Route::post('unit/destroy/{id}', [UkmController::class, 'destroy'])->name('unit.destroy')->middleware('auth');

Route::get('/profil-belajar', function () {
    return view('index2.blade.php');
});
