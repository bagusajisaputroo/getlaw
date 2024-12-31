<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light text-danger" id="mainNav">
    
    <div class="container">
        <a href="/">
            <img src="{{ asset('storage/buatstyle/logo.png') }}" width="50" height="50" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>
        <div class="" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color: #450000;" href="{{ route('book') }}">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #450000;" href="{{ route('lembaga') }}">Kantor Hukum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #450000;" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #450000;" href="{{ route('legal-aid.create') }}">Bantuan Hukum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Content -->
<form class="max-w-md mx-auto">   
    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Books" name="search" />
        <button type="submit" style="background-color: #450000;"class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
  
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($books as $book)
            <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/book/'.$book->gambar) }}" class="w-full h-48 object-cover" alt="{{ $book->title }}">
                <div class="p-4">
                    <h5 class="text-lg font-semibold text-gray-800" style="color: #450000;">{{ $book->Nama_buku }}</h5>
                    <a href="#" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"style="background-color: #450000;">Download</a>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="mt-6">
        {{ $books->links() }}
    </div>
</div>

br
<footer class="text-center text-lg-start" style="background-color: white;">


    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <p style="color: #450000;">© 2020 Copyright</p>

    </div>
    <!-- Copyright -->
  </footer>


<script src="asset('node_modules/fllowbite/dist/fllowbite.min.js"></script>

    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
