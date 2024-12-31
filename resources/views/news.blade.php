<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <title>Document</title>
    <style>
        .cat-news h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.card {
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.slick-prev, .slick-next {
    background-color: #dc3545; /* Warna merah */
    color: white;
    border-radius: 50%;
    padding: 10px;
}

.slick-prev:hover, .slick-next:hover {
    background-color: #c82333; /* Warna gelap saat hover */
}
.cat-news .card {
    border: none; /* Hilangkan border */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan ringan */
    transition: transform 0.3s ease;
}

.cat-news .card:hover {
    transform: scale(1.03); /* Efek hover */
}

.cat-news .card-img-top {
    border-radius: 5px 5px 0 0; /* Rounded corners pada gambar */
}

.cat-news h2 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    border-bottom: 2px solid #450000; /* Garis bawah */
    display: inline-block;
    padding-bottom: 5px;
}

.cat-news .btn {
    font-size: 0.875rem; /* Font kecil untuk tombol */
    padding: 5px 10px; /* Padding lebih kecil */
}
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light text-danger" id="mainNav">
    <div class="container">
        <a href="/">
            <img src="{{ asset('storage/buatstyle/logo.png') }}" width="50" height="50" alt="Logo">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-danger text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg>
        </button>
        <div class="" id="navbarResponsive">
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


<!-- Content -->

  
<div class="cat-news">
    <div class="container">
        <div class="row g-4">
            @foreach ($newsByCategory as $categoryId => $newsItems)
                <!-- Kolom untuk setiap kategori -->
                <div class="col-md-6">
                    <!-- Nama Kategori -->
                    <h2 class="text-danger mb-3">{{ $newsItems->first()->category->name }}</h2>

                    <!-- Grid berita -->
                    <div class="row g-3">
                        @foreach ($newsItems as $news)
                            <div class="col-6">
                                <div class="card h-100">
                                    <img src="{{ asset('storage/news/' . $news->gambar) }}" class="card-img-top" alt="{{ $news->judul }}" style="height: 150px; object-fit: cover;">
                                    <div class="card-body p-2">
                                        <h6 class="card-title mb-2">
                                            <a href="{{ route('news.show', $news->id) }}" class="text-decoration-none text-dark">{{ \Illuminate\Support\Str::limit($news->judul, 50) }}</a>
                                        </h6>
                                        <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary btn-sm" style="background-color: #450000;">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
<!-- Pagination -->
<div class="pagination mt-3">
    {{ $newsItems->appends(['page_' . $categoryId => $newsItems->currentPage()])->links() }}
</div>

                </div>
            @endforeach
        </div>
    </div>
</div>

<br>
<br>
<footer class="text-center text-lg-start" style="background-color: white;">


    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <p style="color: #450000;">© 2020 Copyright</p>

    </div>
    <!-- Copyright -->
  </footer>


<script>
        $(document).ready(function(){
            $('.cn-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true
            });
        });
    </script>
    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
