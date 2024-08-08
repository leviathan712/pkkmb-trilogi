<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.15.0/dist/full.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Asas Pelaksanaan</title>
</head>

<body>
    <div class="hero min-h-screen" style="background-image: url('{{ asset('images/bgasas.jpg') }}');">
        <div class="hero-overlay bg-opacity-10"></div>
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Asas Pelaksanaan</h1>
                <p class="mb-5 description">Pengenalan Kehidupan Kampus Bagi Mahasiswa Baru</p>
                <p class="mb-5 pkkmb">PKKMB</p>
            </div>
        </div>
    </div>

    <div class="custom-card mx-auto">
        <ol class="list-decimal list-inside">
            <li><strong>Asas Keterbukaan</strong>, yaitu semua kegiatan penerimaan mahasiswa baru dilakukan secara terbuka, baik dalam hal pembiayaan, materi/substansi kegiatan, berbagai informasi waktu maupun tempat penyelenggaraan kegiatan.</li>
            <li class="mt-4"><strong>Asas Demokratis</strong>, yaitu semua kegiatan dilakukan dengan berdasarkan kesetaraan semua pihak, dengan menghormati hak dan kewajiban masing-masing pihak yang terlibat dalam kegiatan penerimaan mahasiswa baru tersebut.</li>
            <li class="mt-4"><strong>Asas Humanis</strong>, yaitu kegiatan penerimaan mahasiswa baru dilakukan berdasarkan kemanusiaan yang adil dan beradab, dan prinsip persaudaraan.</li>
        </ol>
    </div>

    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,160L80,176C160,192,320,224,480,213.3C640,203,800,149,960,144C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>

    <!-- New Card Section -->
    <div class="new-card mx-auto p-6 bg-white rounded-lg shadow-md grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="flex justify-center items-center">
            <div class="icon-bg">
                <i class="fas fa-envelope icon"></i>
            </div>
            <div class="ml-4">
                <h2 class="text-lg font-semibold text-black">Email</h2>
                <p class="text-gray-600">Email Resmi Panitia PKKMB Ansakbracana 2024.<br>example@trilogi.ac.id</p>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <div class="icon-bg">
                <i class="fas fa-phone icon"></i>
            </div>
            <div class="ml-4">
                <h2 class="text-lg font-semibold text-black">Kontak</h2>
                <p class="text-gray-600">Nomor Telepon Panitia PKKMB Ansakbracana 2024 yang dapat dihubungi.<br>(000) xxxxx</p>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <div class="icon-bg">
                <i class="fas fa-headset icon"></i>
            </div>
            <div class="ml-4">
                <h2 class="text-lg font-semibold text-black">Layanan</h2>
                <p class="text-gray-600">Jika Mengalami kendala pada website ini, Harap segera beritahu kami.<br>
                    <button class="mt-2 py-2 px-4 bg-blue-500 text-white rounded-lg">Kirim Email →</button>
                </p>
            </div>
        </div>
    </div>

    <div class="pb-6"></div>
    <div class="social-media-container">
        <h2 class="social-media-header">Media Sosial Official PKKMB Universitas Trilogi</h2>
        <p class="social-media-subheader">Ikuti untuk temukan keseruan terkait PKKMB 2024</p>
        <div class="social-media-icons">
            <i class="fab fa-instagram social-media-icon"></i>
            <i class="fab fa-youtube social-media-icon"></i>
        </div>
        <button class="mt-2 py-2 px-4 bg-blue-500 text-white rounded-lg">Kembali ke Beranda</button>
    </div>
</body>

</html>
