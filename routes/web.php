<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
* OLD CONTROLLER
*/
use App\Http\Controllers\UkmController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;

/**
 * GUEST CONTROLLER
 */

use App\Http\Controllers\Guest\BeritaController;
use App\Http\Controllers\Guest\BerandaController;
use App\Http\Controllers\Guest\KabinetController;
use App\Http\Controllers\Guest\KegiatanController;
use App\Http\Controllers\Guest\StrukturalController;
use App\Http\Controllers\Guest\PartnershipController;
use App\Http\Controllers\Guest\KontakController;

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


/**
 * ADMIN ROUTES
 */
require __DIR__ . '/admin.php';


/*
* GUEST ROUTES
*/
// BERANDA
Route::get('/', [BerandaController::class, 'index'])->name('guest.beranda.index');

// PROFIL
Route::prefix('profil')->group(function () {
    // KABINET
    Route::get('/kabinet', [KabinetController::class, 'index'])->name('guest.profil.kabinet.index');

    // STRUKTURAL
    Route::prefix('struktural')->group(function () {
        Route::get('/', [StrukturalController::class, 'index'])->name('guest.profil.struktural.index');
        Route::get('/{id}', [StrukturalController::class, 'detail'])->name('guest.profil.struktural.detail');
    });
});

// KEGIATAN
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('guest.kegiatan.index');

// BERITA
Route::get('/berita', [BeritaController::class, 'index'])->name('guest.berita.index');

// PARTNERSHIP
Route::prefix('partnership')->group(function () {
    Route::get('/', [PartnershipController::class, 'index'])->name('guest.partnership.index');
    Route::get('/media-partner', [PartnershipController::class, 'mediaPartner'])->name('guest.partnership.media-partner.index');
    Route::get('/media-partner/prosedur', [PartnershipController::class, 'prosedurMediaPartner'])->name('guest.partnership.media-partner.prosedur.index');
    Route::get('/prosedur', [PartnershipController::class, 'prosedur'])->name('guest.partnership.prosedur.index');
});

// KONTAK
Route::get('/kontak', [KontakController::class, 'index'])->name('guest.kontak.index');
