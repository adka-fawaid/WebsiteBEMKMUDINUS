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
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;

/*
* ADMIN CONTROLLER
*/
use App\Http\Controllers\Admin\BeritaAdminController;
use App\Http\Controllers\Admin\KontakAdminController;
use App\Http\Controllers\Admin\KabinetAdminController;
use App\Http\Controllers\Admin\VisiMisiAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\StrukturalAdminController;
use App\Http\Controllers\Admin\PendaftaranAdminController;
use App\Http\Controllers\Admin\ProgramKerjaAdminController;
use App\Http\Controllers\Admin\SambutanPresmaAdminController;
use App\Http\Controllers\Admin\RekapPendaftaranAdminController;
use App\Http\Controllers\Admin\KelolaPartnershipAdminController;
use App\Http\Controllers\Admin\ProsedurPartnershipAdminController;
use App\Http\Controllers\Admin\RekapPendaftaranPartnershipAdminController;

/**
 * GUEST CONTROLLER
 */
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnershipController;

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
            Route::put('/update/{id}', [SambutanPresmaAdminController::class, 'update'])
                ->name('admin.sambutan-presma.update');
        });

        // KABINET
        Route::prefix('kabinet')->group(function () {
            Route::get('/', [KabinetAdminController::class, 'index'])
                ->name('admin.kabinet.index');
            Route::put('/update/{id}', [KabinetAdminController::class, 'update'])
                ->name('admin.kabinet.update');

            // FILOSOFI
            Route::prefix('filosofi')->group(function () {
                Route::get('/{kabinetId}', [KabinetAdminController::class, 'filosofi'])
                    ->name('admin.kabinet.filosofi.index');

                // MAKNA SIMBOL
                Route::post('/{kabinetId}/makna-simbol/store', [KabinetAdminController::class, 'storeMaknaSimbol'])
                    ->name('admin.kabinet.filosofi.makna-simbol.store');
                Route::put('/makna-simbol/update/{id}', [KabinetAdminController::class, 'updateMaknaSimbol'])
                    ->name('admin.kabinet.filosofi.makna-simbol.update');
                Route::delete('/makna-simbol/destroy/{id}', [KabinetAdminController::class, 'destroyMaknaSimbol'])
                    ->name('admin.kabinet.filosofi.makna-simbol.destroy');

                // MAKNA WARNA
                Route::post('/{kabinetId}/makna-warna/store', [KabinetAdminController::class, 'storeMaknaWarna'])
                    ->name('admin.kabinet.filosofi.makna-warna.store');
                Route::put('/makna-warna/update/{id}', [KabinetAdminController::class, 'updateMaknaWarna'])
                    ->name('admin.kabinet.filosofi.makna-warna.update');
                Route::delete('/makna-warna/destroy/{id}', [KabinetAdminController::class, 'destroyMaknaWarna'])
                    ->name('admin.kabinet.filosofi.makna-warna.destroy');
            });
        });

        // VISI MISI
        Route::prefix('visi-misi')->group(function () {
            Route::get('/', [VisiMisiAdminController::class, 'index'])
                ->name('admin.visi-misi.index');
            Route::post('/visi/store', [VisiMisiAdminController::class, 'storeVisi'])
                ->name('admin.visi-misi.visi.store');
            Route::post('/misi/store', [VisiMisiAdminController::class, 'storeMisi'])
                ->name('admin.visi-misi.misi.store');
            Route::put('/visi/update/{id}', [VisiMisiAdminController::class, 'updateVisi'])
                ->name('admin.visi-misi.visi.update');
            Route::put('/misi/update/{id}', [VisiMisiAdminController::class, 'updateMisi'])
                ->name('admin.visi-misi.misi.update');
            Route::delete('/visi/destroy/{id}', [VisiMisiAdminController::class, 'destroyVisi'])
                ->name('admin.visi-misi.visi.destroy');
            Route::delete('/misi/destroy/{id}', [VisiMisiAdminController::class, 'destroyMisi'])
                ->name('admin.visi-misi.misi.destroy');
        });

        // STRUKTURAL UNIT ORGANISASI
        Route::prefix('struktural')->group(function () {
            Route::get('/', [StrukturalAdminController::class, 'index'])
                ->name('admin.struktural.index');
            Route::post('/store', [StrukturalAdminController::class, 'store'])
                ->name('admin.struktural.store');
            Route::put('/update/{id}', [StrukturalAdminController::class, 'update'])
                ->name('admin.struktural.update');
            Route::delete('/destroy/{id}', [StrukturalAdminController::class, 'destroy'])
                ->name('admin.struktural.destroy');

            // ANGGOTA UNIT
            Route::prefix('unit-organisasi')->group(function () {
                Route::get('/{unitOrganisasiId}/anggota', [StrukturalAdminController::class, 'unitOrganisasi'])
                    ->name('admin.struktural.unit-organisasi.index');
                Route::post('/{unitOrganisasiId}/anggota', [StrukturalAdminController::class, 'createAnggotaUnit'])
                    ->name('admin.struktural.unit-organisasi.anggota.store');
                Route::put('/{unitOrganisasiId}/anggota/{anggotaId}', [StrukturalAdminController::class, 'updateAnggotaUnit'])
                    ->name('admin.struktural.unit-organisasi.anggota.update');
                Route::delete('/{unitOrganisasiId}/anggota/{anggotaId}', [StrukturalAdminController::class, 'destroyAnggotaUnit'])
                    ->name('admin.struktural.unit-organisasi.anggota.destroy');
            });
        });

        // PROGRAM KERJA
        Route::prefix('program-kerja')->group(function () {
            Route::get('/', [ProgramKerjaAdminController::class, 'index'])
                ->name('admin.program-kerja.index');
            Route::post('/store', [ProgramKerjaAdminController::class, 'store'])
                ->name('admin.program-kerja.store');
            Route::put('/update/{id}', [ProgramKerjaAdminController::class, 'update'])
                ->name('admin.program-kerja.update');
            Route::delete('/destroy/{id}', [ProgramKerjaAdminController::class, 'destroy'])
                ->name('admin.program-kerja.destroy');
        });

        // PENDAFTARAN
        Route::prefix('pendaftaran')->group(function () {
            Route::get('/', [PendaftaranAdminController::class, 'index'])
                ->name('admin.pendaftaran.index');
            Route::post('/store', [PendaftaranAdminController::class, 'store'])
                ->name('admin.pendaftaran.store');
            Route::put('/update/{id}', [PendaftaranAdminController::class, 'update'])
                ->name('admin.pendaftaran.update');
            Route::delete('/destroy/{id}', [PendaftaranAdminController::class, 'destroy'])
                ->name('admin.pendaftaran.destroy');

            // FORMULIR PENDAFTARAN
            Route::prefix('formulir')->group(function () {
                Route::get('/{pendaftaranId}', [PendaftaranAdminController::class, 'formulirPendaftaran'])
                    ->name('admin.pendaftaran.formulir.index');
                Route::post('/{pendaftaranId}/pertanyaan/store', [PendaftaranAdminController::class, 'storePertanyaan'])
                    ->name('admin.pendaftaran.formulir.pertanyaan.store');
                Route::put('/{pendaftaranId}/pertanyaan/update/{pertanyaanId}', [PendaftaranAdminController::class, 'updatePertanyaan'])
                    ->name('admin.pendaftaran.formulir.pertanyaan.update');
                Route::delete('/pertanyaan/destroy/{id}', [PendaftaranAdminController::class, 'destroyPertanyaan'])
                    ->name('admin.pendaftaran.formulir.pertanyaan.destroy');
            });
        });

        // REKAP PENDAFTARAN
        Route::prefix('rekap-pendaftaran')->group(function () {
            Route::get('/', [RekapPendaftaranAdminController::class, 'index'])
                ->name('admin.rekap-pendaftaran.index');

            // RESPON PENDAFTARAN
            Route::prefix('respon')->group(function () {
                Route::get('/{id}', [RekapPendaftaranAdminController::class, 'responPendaftaran'])
                    ->name('admin.rekap-pendaftaran.respon-pendaftaran.index');
            });
        });

        // BERITA
        Route::prefix('berita')->group(function () {
            Route::get('/', [BeritaAdminController::class, 'index'])
                ->name('admin.berita.index');
            Route::post('/store', [BeritaAdminController::class, 'store'])
                ->name('admin.berita.store');
            Route::put('/update/{id}', [BeritaAdminController::class, 'update'])
                ->name('admin.berita.update');
            Route::delete('/destroy/{id}', [BeritaAdminController::class, 'destroy'])
                ->name('admin.berita.destroy');
        });

        // KELOLA PARTNERSHIP
        Route::prefix('kelola-partnership')->group(function () {
            Route::get('/', [KelolaPartnershipAdminController::class, 'index'])
                ->name('admin.kelola-partnership.index');
        });

        // PROSEDUR PARTNERSHIP
        Route::prefix('prosedur-partnership')->group(function () {
            Route::get('/', [ProsedurPartnershipAdminController::class, 'index'])
                ->name('admin.prosedur-partnership.index');
        });

        // REKAP PENDAFTARAN PARTNERSHIP
        Route::prefix('rekap-pendaftaran-partnership')->group(function () {
            Route::get('/', [RekapPendaftaranPartnershipAdminController::class, 'index'])
                ->name('admin.rekap-pendaftaran-partnership.index');
        });

        // KONTAK
        Route::prefix('kontak')->group(function () {
            Route::get('/', [KontakAdminController::class, 'index'])
                ->name('admin.kontak.index');
            Route::post('/store', [KontakAdminController::class, 'store'])
                ->name('admin.kontak.store');
            Route::put('/update/{id}', [KontakAdminController::class, 'update'])
                ->name('admin.kontak.update');
            Route::delete('/destroy/{id}', [KontakAdminController::class, 'destroy'])
                ->name('admin.kontak.destroy');
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
Route::post('/partnership/submit', [AppController::class, 'store_partnership']);

Route::get('/forum', [AppController::class, 'forum']);

Route::get('/detail_forum/{slug}', [AppController::class, 'detail_forum']);

Route::get('/kabinet', [AppController::class, 'kabinet']);

Route::get('/detail_kabinet/{slug}', [AppController::class, 'detail_kabinet']);

Route::get('/proker', [AppController::class, 'proker'])->name('proker');

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
