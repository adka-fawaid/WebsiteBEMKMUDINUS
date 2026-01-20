<?php

use Illuminate\Support\Facades\Route;

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
            Route::put('/update/{id}', [KelolaPartnershipAdminController::class, 'update'])
                ->name('admin.kelola-partnership.update');
            Route::put('/update-link-status/{id}', [KelolaPartnershipAdminController::class, 'updateLinkStatus'])
                ->name('admin.kelola-partnership.update-link-status');
        });

        // PROSEDUR PARTNERSHIP
        Route::prefix('prosedur-partnership')->group(function () {
            Route::get('/', [ProsedurPartnershipAdminController::class, 'index'])
                ->name('admin.prosedur-partnership.index');

            // KELOLA PROSEDUR
            Route::prefix('prosedur')->group(function () {
                Route::get('/{partnershipId}', [ProsedurPartnershipAdminController::class, 'prosedur'])
                    ->name('admin.prosedur-partnership.prosedur');

                // MEDIA PARTNER GRATIS
                Route::post('/{partnershipId}/medpart-gratis/store', [ProsedurPartnershipAdminController::class, 'storeMedpartGratis'])
                    ->name('admin.prosedur-partnership.medpart-gratis.store');
                Route::put('/{partnershipId}/medpart-gratis/update/{id}', [ProsedurPartnershipAdminController::class, 'updateMedpartGratis'])
                    ->name('admin.prosedur-partnership.media-partner.gratis.update');
                Route::delete('/{partnershipId}/medpart-gratis/destroy/{id}', [ProsedurPartnershipAdminController::class, 'destroyMedpartGratis'])
                    ->name('admin.prosedur-partnership.media-partner.gratis.destroy');

                // MEDIA PARTNER BERBAYAR
                Route::post('/{partnershipId}/medpart-berbayar/store', [ProsedurPartnershipAdminController::class, 'storeMedpartBerbayar'])
                    ->name('admin.prosedur-partnership.media-partner.berbayar.store');
                Route::put('/{partnershipId}/medpart-berbayar/update/{id}', [ProsedurPartnershipAdminController::class, 'updateMedpartBerbayar'])
                    ->name('admin.prosedur-partnership.media-partner.berbayar.update');
                Route::delete('/{partnershipId}/medpart-berbayar/destroy/{id}', [ProsedurPartnershipAdminController::class, 'destroyMedpartBerbayar'])
                    ->name('admin.prosedur-partnership.media-partner.berbayar.destroy');

                // SPONSORSHIP, KOLABORASI, KAMPUS VISIT, DELEGASI
                Route::post('/{partnershipId}/lainnya/store', [ProsedurPartnershipAdminController::class, 'storeProsedur'])
                    ->name('admin.prosedur-partnership.lainnya.store');
                Route::put('/{partnershipId}/lainnya/update/{id}', [ProsedurPartnershipAdminController::class, 'updateProsedur'])
                    ->name('admin.prosedur-partnership.lainnya.update');
                Route::delete('/{partnershipId}/lainnya/destroy/{id}', [ProsedurPartnershipAdminController::class, 'destroyProsedur'])
                    ->name('admin.prosedur-partnership.lainnya.destroy');
            });
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
