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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Guest\BerandaController;
use App\Http\Controllers\Guest\KabinetController;
use App\Http\Controllers\Guest\StrukturalController;
use App\Http\Controllers\Guest\PartnershipController;

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
Route::get('/', [BerandaController::class, 'index']);

// PROFIL
Route::prefix('profil')->group(function () {
    // KABINET
    Route::get('/kabinet', [KabinetController::class, 'index'])->name('guest.profil.kabinet');

    // STRUKTURAL
    Route::get('/struktural', [StrukturalController::class, 'index'])->name('guest.profil.struktural');
});

// PARTNERSHIP
Route::get('/partnership', [PartnershipController::class, 'index'])->name('guest.partnership.index');

Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/foto', [AppController::class, 'foto']);

Route::get('/calendar', [AppController::class, 'calendar']);

Route::get('/detail_partnership/{slug}', [AppController::class, 'detail_partnership']);
Route::post('/partnership/submit', [AppController::class, 'store_partnership']);

Route::get('/forum', [AppController::class, 'forum']);

Route::get('/detail_forum/{slug}', [AppController::class, 'detail_forum']);

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

Route::get('/kabinet/{slug}', function ($slug) {

    $data = [

        // STRUKTURAL INTI
        'presiden-mahasiswa' => [
            'judul' => 'Presiden Mahasiswa',
            'desc' => 'Presiden mahasiswa merupakan pemimpin tertinggi kabinet yang
memiliki peranan dalam memberi arahan kepada pengurus di bawah
kepemimpinannya, menentukan kebijakan, serta bertanggung jawab
terhadap kepengurusan BEM KM selama satu periode.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'wakil-presiden-mahasiswa' => [
            'judul' => 'Wakil Presiden Mahasiswa',
            'desc' => 'Wakil Presiden mahasiswa merupakan bagian dalam kepengurusan
kabinet yang memiliki tugas membantu Presiden Mahasiswa dalam
memberi arahan kepada pengurus, menentukan kebijakan, serta
bertanggung jawab terhadap kepengurusan BEM KM selama menjabat.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'sekretaris-jenderal' => [
            'judul' => 'Sekretaris Jenderal',
            'desc' => 'Sekretariat Jenderal merupakan kelembagaan penyelenggara
pembinaan administrasi, organisasi, dan ketatalaksanaan terhadap
seluruh unsur dilingkungan kesekjenan seperti biro-biro dan juga
dilingkungan kemenkoan. Dipimpin oleh seorang Sekretaris Jenderal
dan dibantu tugasnya oleh Wakil Sekretaris Jenderal dan
mempertanggungjawabkan tugasnya kepada Presiden dan Wakil
Presiden Mahasiswa.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'visi' => [
            'judul' => 'Visi Kabinet Aksa Sinergi',
            'desc' => 'Menjadikan BEM KM UDINUS penggerak kolaboratif, progresif, dan solutif,
yang menguatkan mahasiswa sebagai katalis perubahan sosial-akademik
melalui karya nyata dan inovasi berkelanjutan bagi kampus dan
masyarakat.',
            'image' => 'Logo Aksa Sinergi.png',
            'create_at' => now(),
        ],

        'misi' => [
            'judul' => 'Misi Kabinet Aksa Sinergi',
            'desc' => '<ol>
        <li>
            1. Mewujudkan tata kelola organisasi yang profesional, transparan, dan berintegritas melalui sinergi kepemimpinan partisipatif serta budaya kerja kolektif.
        </li>
        <li>
            2. Mendorong pengembangan potensi mahasiswa melalui pelatihan, literasi teknologi, dan penguatan soft skill berbasis sinergi antar elemen.
        </li>
        <li>
            3. Menggerakkan aksi kolektif berbasis data, riset kritis, dan kolaborasi lintas minat melalui sinergi gerakan yang responsif serta berdampak.
        </li>
        <li>
            4. Menjembatani aspirasi mahasiswa secara kritis dan konstruktif melalui sinergi komunikasi dengan pihak kampus.
        </li>
        <li>
            5. Melaksanakan program sosial dan pemberdayaan masyarakat melalui sinergi multipihak yang selaras dengan nilai Tri Dharma Perguruan Tinggi.
        </li>
    </ol>',
            'image' => 'Logo Aksa Sinergi.png',
            'create_at' => now(),
        ],

        // BIRO
        'biro-administrasi' => [
            'judul' => 'Biro Administrasi',
            'desc' => 'Biro Adiministrasi merupakan kelembagaan dibawah naungan langsung
Sekretaris Jenderal yang bertanggung jawab untuk mengelola seputar
keadministrasian kabinet, membantu dalam sinkronisasi proposal
kegiatan, dan mengelola keadministrasian kementerian melalui
panjangan tangan dari sekretaris kementerian.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'biro-keuangan' => [
            'judul' => 'Biro Keuangan',
            'desc' => 'Biro keuangan merupakan kelembagaan dibawah naungan langsung
Sekretaris Jenderal yang bertanggung jawab untuk mengatur
kebendaharaan kabinet yang meliputi pengelolaan uang kas, pendataan
pengeluaran serta pemasukan agenda non proker di setiap kementerian,
dan sebagai konselor bagi tiap deputi keuangan program kerja dalam
menyiapkan program kerja dan setelah penyelesaian program kerja (LPJ).',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'biro-psdm' => [
            'judul' => 'Biro PSDM',
            'desc' => 'Biro PSDM merupakan kelembagaan dibawah naungan langsung
Sekretaris Jenderal dengan fokus sebagai panjang tangan dari Sekretaris
Jenderal dalam pengimplementasian nilai pengawasan, pengayoman, dan
kaderisasi kepada seluruh anggota kabinet secara langsung.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'biro-medkominfo' => [
            'judul' => 'Biro Medkominfo',
            'desc' => 'Biro Medkominfo merupakan kelembagaan dibawah naungan langsung
Sekretaris Jenderal dengan fokus utama dalam tata kelola seluruh media
sosial kabinet, serta sebagai pengawasan tertinggi kabinet dalam
mengakomondir segala kebijakan media sosial kementerian berdasarkan
SOP yang sudah disepakati.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        // LAINNYA
        'maskot' => [
            'judul' => 'Maskot Kabinet Aksa Sinergi',
            'desc' => 'Penjelasan lengkap Maskot Kabinet Aksa Sinergi.',
            'image' => 'maskot.png',
            'create_at' => now(),
        ],

        // KEMENKOAN
        'kemenkoan-pergerakan' => [
            'judul' => 'Kemenkoan Pergerakan',
            'desc' => 'Kementerian Koordinator yang dipimpin oleh seorang Menteri
Koordinator yang bertugas melaksanakan fungsi sinkronisasi, koordinasi,
pengawasan, serta evaluasi pada kementerian yang dinaungi.
Kementerian yang dinaungi diantaranya yaitu Kementerian Sosial
Masyarakat, Kementerian Sosial Politik, dan Kementerian Pemberdayaan
Perempuan dan Inklusivitas. Menko Pergerakan
mempertanggungjawabkan tugasnya kepada Sekretaris Jenderal.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kemenkoan-penaungan-kesejahteraan' => [
            'judul' => 'Kemenkoan Penaungan & Kesejahteraan',
            'desc' => 'Kementerian Koordinator yang dipimpin oleh seorang Menteri
Koordinator yang bertugas melaksanakan fungsi Sinkronisasi, Koordinasi,
Pengawasan, serta evaluasi pada kementerian yang dinaungi.
Kementerian yang dinaunginya diantaranya yaitu Kementerian Dalam
Negeri, Kementerian Kesenian, Pendidikan, dan Olahraga, serta
Kementerian Advokasi dan Kesejahteraan Mahasiswa, Menko
Penaungan dan Kesejahteraan mempertanggungjawabkan tugasnya
kepada Sekretaris Jenderal.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kemenkoan-relasi-inovasi' => [
            'judul' => 'Kemenkoan Relasi & Inovasi',
            'desc' => 'Kementerian Koordinator yang dipimpin oleh seorang Menteri
Koordinator yang bertugas melaksanakan fungsi Sinkronisasi, Koordinasi,
Pengawasan, serta evaluasi pada kementerian yang dinaungi.
Kementerian yang dinaunginya diantaranya yaitu Kementerian Luar
Negeri, Kementerian Kreativitas dan Inovasi, dan Kementerian Badan
Usaha Milik Keluarga Mahasiswa. Menko Relasi dan Inovasi
mempertanggungjawabkan tugasnya kepada Sekretaris Jenderal.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        // KEMENTERIAN
        'kementerian-sosial-politik' => [
            'judul' => 'Kementerian Sosial Politik',
            'desc' => 'Bertugas untuk melakukan kajian dan menyuarakan terhadap
permasalahan lingkungan hidup, pendidikan, dan politik. Menyampaikan
hasil kajian mengenai isu regional maupun nasional yang telah dibuat
oleh pihak-pihak yang telah bekerjasama dengan BEM KM UDINUS.
Dengan itu BEM KM UDINUS diharapkan mampu memecahkan masalah
dari isu dengan cara diskusi dan melakukan gerakan yang relevan,
selanjutnya akan disampaikan kepada pemangku kepentingan yang
bersangkutan. Kementerian ini dipimpin oleh seorang menteri dan
mempertanggungjawabkan tugasnya kepada Menteri Koordinator
Pergerakan.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-ppi' => [
            'judul' => 'Kementerian PP&I',
            'desc' => 'Kementerian yang bergerak dibidang pemberdayaan perempuan dan
inklusivitas. Dengan tujuan mengangkat isu-isu terkait serta berupaya
untuk menyelesaikan permasalahan yang ada. Kementriannya dipimpin
oleh seorang Menteri dan mempertanggungjawabkan',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-sosial-masyarakat' => [
            'judul' => 'Kementerian Sosial Masyarakat',
            'desc' => 'Kementerian yang bergerak di bidang aksi sosial pada lingkup
masyarakat, sebagai wadah untuk menggerakkan jiwa sosial mahasiswa
dan wujud nyata untuk pengabdian kepada masyarakat. Dipimpin oleh
seorang Menteri dan mempertanggungjawabkan tugasnya kepada
Menteri Koordinator Pergerakan.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-dalam-negeri' => [
            'judul' => 'Kementerian Dalam Negeri',
            'desc' => 'Bertugas dalam mengkoordinasikan dan bekerja sama dengan ORMAWA
Fakultas meliputi BEM-Fakultas, Hima, dan Biro- Fakultas untuk
sinkronisasi kegiatan dan menciptakan harmonisasi dalam lingkup
ORMAWA di UDINUS. Kemudian, menjadi jembatan mahasiswa umum
untuk kegiatan kemahasiswaan. Kementriannya dipimpin oleh seorang
Menteri dan mempertanggungjawabkan tugasnya kepada Menteri
Koordinator Penaungan dan Kesejahteraan',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-kespora' => [
            'judul' => 'Kementerian Kespora',
            'desc' => 'Bertugas menciptakan, merumuskan, merancang mutu kesenian,
pendidikan, dan olahraga sehingga menumbuhkan suasana yang
produktif bagi mahasiswa UDINUS. Serta mengayomi UKM kesenian,
pendidikan, dan olahraga agar terlaksana kerjasama dan sinkronisasi
sehingga tercipta kegiatan-kegiatan yang sistematis, terkoordinir, inovatif
dan berdampak positif.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-advokesma' => [
            'judul' => 'Kementerian Advokesma',
            'desc' => 'Berfungsi untuk menjembatani aspirasi dari ORMAWA dan mahasiswa
yang berkaitan dengan kesejahteraan ORMAWA dan mahasiswa dalam
bentuk fasilitas akademik, hak – hak dan kebijakan yang berdampak pada
ORMAWA dan mahasiswa untuk disampaikan dan di advokasikan kepada
pihak rektorat UDINUS dengan mendapatkan solusi terbaik untuk
kebaikan bersama.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-luar-negeri' => [
            'judul' => 'Kementerian Luar Negeri',
            'desc' => 'Menjalankan fungsi mediator informasi dari eksternal, membangun serta
menjalin relasi serta memperluas jaringan komunikasi dan kerjasama
guna keberlangsungan BEM KM UDINUS. Hal tersebut meliputi kampus
lain, perusahaan, dan instansi lainnya baik dalam skala regional, nasional
maupun internasional.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-kreasi' => [
            'judul' => 'Kementerian Kreasi',
            'desc' => 'Bertugas melakukan riset yang bertujuan untuk kreativitas dan inovasi
untuk anggota BEM KM, serta implementasi dalam keorganisasian.
Dilaksanakan dengan program workshop, kerjasama akademik serta
studi di bidang riset dan teknologi yang berkelanjutan.
Untuk terciptanya regenerasi di lingkup internal BEM KM UDINUS, maka
kementerian kreativitas dan inovasi juga memiliki andil dalam
melakukan sharing knowledge dalam kreativitas dan inovasi
keorganisasian yang berpengaruh dalam keberlangsungan organisasi.
Kementerian ini dipimpin oleh seorang Menteri dan bertanggung jawab
kepada Menteri Koordinator Relasi',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],

        'kementerian-bumkm' => [
            'judul' => 'Kementerian BUMKM',
            'desc' => 'Badan Usaha Milik Keluarga Mahasiswa bertujuan untuk penerapan ilmu
kewirausahaan yang telah dipelajari dengan harapan terciptanya
organisasi yang sehat secara finansial, ide-ide wirausaha akan diolah dan
diajukan ke duta kampus atau ke biro keuangan BEM KM UDINUS untuk
mendapatkan modal merealisasikan ide-ide yang telah diolah tersebut.',
            'image' => 'presma2.jpg',
            'create_at' => now(),
        ],
    ];

    if (!isset($data[$slug])) abort(404);

    $kabinet = (object) $data[$slug];

    return view('kabinet.detail_kabinet', compact('kabinet'));
});

Route::get('/berita/{slug}', function ($slug) {

    $data = [
        'webinar-international' => [
            'judul' => 'Webinar International',
            'desc' => '
                <p>Webinar International BEM KM UDINUS merupakan kegiatan berskala global.</p>
                <p>Kegiatan ini diikuti oleh ratusan peserta.</p>
            ',
            'image' => 'foto_bersama.jpeg',
            'tanggal' => '20 Januari 2026',
        ],
    ];

    if (!isset($data[$slug])) {
        abort(404);
    }

    $berita = (object) $data[$slug];

    return view('berita.detail', compact('berita'));
});
