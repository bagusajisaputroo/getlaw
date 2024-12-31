<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <title>Document</title>
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



<!-- Content -->

<div class="container my-4">
  <table class="table table-striped table-bordered table-hover">
  <thead class="table-light">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Kantor</th>
      <th scope="col">Alamat</th>
      <th scope="col">Spesialis</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($lembaga as $lembagas)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $lembagas->nama_lembaga }}</td>
        <td>{{ $lembagas->alamat }}</td>
        <td>{{ $lembagas->category->name }}</td>
      </tr>
    @endforeach
  </tbody>
  </table>
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




    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
