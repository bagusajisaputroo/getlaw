<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Document</title>
    <STyle>
        .btn-primary {
            background-color: #450000;
            border-color: #450000;
        }
        .btn-primary:hover {
            background-color: purple;
            border-color: purple;
        }
        .nav-link {
            color: #450000 !important;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        body {
            font-family: 'Arial', sans-serif;
        }
        </STyle>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light text-danger" id="mainNav">
    <div class="container">
        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('storage/buatstyle/logo.png') }}" width="50" height="50" alt="Logo">
        </a>

        <!-- Toggler Button -->
        <button class="navbar-toggler text-uppercase font-weight-bold bg-danger text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <span class="navbar-toggler-icon">
                <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                </svg>
            </span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" style="color: #450000;" href="{{ route('book') }}">Buku</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" style="color: #450000;" href="{{ route('lembaga') }}">Kantor Hukum</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" style="color: #450000;" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" style="color: #450000;" href="{{ route('legal-aid.create') }}">Bantuan Hukum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($news as $index => $new)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($news as $index => $new)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/news/' . $new->gambar) }}" class="d-block w-100" alt="{{ $new->judul }}">
                <div class="container">
                    <div class="carousel-caption {{ $index === 0 ? 'text-start' : '' }}">
                        <h1>{{ $new->judul }}</h1>
                        <p>Some representative content for this slide.</p>
                        <p><a class="btn btn-lg btn-primary" href="news">Learn more</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="row featurette" style="padding: 100px;">
    <div class="col-md-7">
        <h2 class="featurette-heading" style="color: #450000;">Semua lembaga di Indonesia.</h2>
        <p class="lead">
            Mencari kantor hukum yang tepat adalah langkah penting untuk memastikan bahwa Anda mendapatkan nasihat dan dukungan hukum yang diperlukan. 
            Dengan banyaknya pilihan yang tersedia, penting untuk mempertimbangkan beberapa faktor, seperti spesialisasi, pengalaman, dan reputasi kantor hukum tersebut. 
            Apakah Anda membutuhkan bantuan dalam masalah perdata, pidana, atau bisnis, memilih kantor hukum yang memiliki keahlian di bidang tersebut akan memberikan keuntungan tersendiri. 
            Melakukan riset, membaca ulasan, dan berkonsultasi dengan klien sebelumnya dapat membantu Anda menemukan kantor hukum yang sesuai dengan kebutuhan dan harapan Anda. 
            Pastikan untuk memilih yang tidak hanya profesional, tetapi juga memahami situasi dan tujuan Anda, sehingga Anda dapat merasa nyaman dan percaya dalam menjalani proses hukum.
        </p>
        <a href="{{ route('lembaga') }}" class="btn btn-primary" style="margin-top: 20px; background-color: #450000; color: white;border: none; outline: none;">Cek Semua</a>
    </div>
    <div class="col-md-5">
        <img src="{{ asset('storage/news/' . $news[0]->gambar) }}" alt="Gambar Kantor Hukum" class="img-fluid">
    </div>
</div>
<div class="row featurette" style="padding: 100px; background-color: #450000;">
    <div class="masthead text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img src="{{ asset('storage/buatstyle/pngegg.png') }}" width="150" height="150" alt="">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0 fs-1">CARI BUKU YANG SESUAI DENGAN DIRIMU!</h1>
    
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0 fs-4">KUMPULAN BUKU TENTANG HUKUM</p>
            <a href="{{ route('book') }}" class="btn btn-primary" style="margin-top: 20px;border: none; outline: none;background-color: white; color: #450000;">Cek Semua</a>
        </div>
    </div>
</div>
</div>
<!-- <div class="gradient-bar" style="height:100px;background:linear-gradient(to bottom, #4b0000, #4b0000 50%, #ffffff 50%, #ffffff);"></div> -->
<!-- BANTUAN HUKUM SECTION -->
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
  <div class="container-fluid py-5">
    <div class="row align-items-center">
      <!-- Kolom untuk gambar -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('storage/buatstyle/jurusan-hukum-dan-ilmu-hukum.jpg') }}" alt="Bantuan Hukum" class="img-fluid rounded">
      </div>
      <!-- Kolom untuk teks dan tombol -->
      <div class="col-md-6">
        <h1 class="display-5 fw-bold">BANTUAN HUKUM GRATIS</h1>
        <p class="fs-5">
          Bantuan hukum gratis adalah layanan yang diberikan kepada masyarakat yang membutuhkan pendampingan atau konsultasi hukum tanpa dikenakan biaya. 
          Layanan ini bertujuan untuk memastikan setiap individu, terutama mereka yang kurang mampu, mendapatkan keadilan dan perlindungan hukum. 
          Melalui bantuan hukum gratis, Anda dapat berkonsultasi mengenai berbagai permasalahan hukum, seperti sengketa perdata, pidana, keluarga, atau hak-hak tenaga kerja. 
          Kami berkomitmen untuk memberikan solusi terbaik dan mendampingi Anda dalam setiap proses hukum. Jika Anda membutuhkan bantuan hukum, jangan ragu untuk menghubungi kami melalui platform ini. 
          Keadilan adalah hak semua orang, dan kami di sini untuk mendukung Anda.
        </p>
        <a href="{{ route('legal-aid.create') }}" class="btn btn-primary btn-lg" style="background-color: #450000; color: white;border: none; outline: none;">Isi Form</a>
        
      </div>
    </div>
  </div>
</div>
<!-- END -->
<footer class="text-center text-lg-start" style="background-color: white;">


    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <p style="color: #450000;">© 2020 Copyright</p>

    </div>
    <!-- Copyright -->
  </footer>

    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
