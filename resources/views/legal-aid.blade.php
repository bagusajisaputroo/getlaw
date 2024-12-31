<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Bantuan Hukum</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #343a40;
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
        .alert-success {
            background-color: #e9f8f2;
            color: #2d8a60;
            border-color: #c3e6cd;
        }
    </style>
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

    <div class="container" style="max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;">
        <h1 class="text-center mb-4">Form Pengajuan Bantuan Hukum</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('legal-aid.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Masukkan nomor telepon Anda" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control" rows="3" placeholder="Masukkan alamat lengkap Anda" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Kasus</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Jelaskan kasus yang ingin diajukan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ajukan</button>
        </form>

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
