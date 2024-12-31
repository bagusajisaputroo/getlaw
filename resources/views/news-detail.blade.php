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
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light text-danger" id="mainNav">
    <div class="container">
        <a href="/"> <!-- Membungkus gambar dengan tag anchor -->
            <img src="{{ asset('storage/buatstyle/logo.png') }}" width="50" height="50" alt="Logo">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-danger text-white rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg>
        </button>
        <div class="navbar-collapse collapse" id="navbarResponsive">
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
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h1>{{ $news->judul }}</h1>
    <p><strong>Kategori:</strong> {{ $news->category->name }}</p>
    <img src="{{ asset('storage/news/' . $news->gambar) }}" style="max-width: 100%; height: 500px;  " class="img-fluid" alt="{{ $news->judul }}">
    <br>
    <br>
    <p>{{ $news->isi_berita}}</p> <!-- Pastikan Anda memiliki kolom 'isi' di model News -->
    <a href="{{ route('news') }}" class="btn btn-secondary">Kembali ke Berita</a>
    <br>
    <br>
    <br>
</div>
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
