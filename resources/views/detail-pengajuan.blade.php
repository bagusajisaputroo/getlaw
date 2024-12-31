<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center mb-4">Detail Pengajuan Bantuan Hukum</h1>

    <div class="card">
        <div class="card-body">
            <h5>Nama: {{ $request->name }}</h5>
            <h5>Email: {{ $request->email }}</h5>
            <h5>Telepon: {{ $request->phone }}</h5>
            <h5>Alamat:</h5>
            <p>{{ $request->address }}</p>
            <h5>Deskripsi Kasus:</h5>
            <p>{{ $request->description }}</p>
            <h5>Status: {{ ucfirst($request->status) }}</h5>
        </div>
    </div>
</div>
</body>
</html>