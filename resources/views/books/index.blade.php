<!DOCTYPE html>
<html>
<head>
    <title>Lukmana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4 text-muted">Lukman Adiansyah</h1>
    <h2 class="mb-4">Perpustakaan Online</h2>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Tambah Buku --}}
    <div class="card mb-4">
        <div class="card-header bg-danger bg-opacity-25">Tambah Buku</div>
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="author" class="form-label">Penulis</label>
                        <input type="text" name="author" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="publisher" class="form-label">Penerbit</label>
                        <input type="text" name="publisher" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label">Tahun</label>
                        <input type="number" name="year" class="form-control" min="1000" max="9999" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Daftar Buku --}}
    <div class="card">
        <div class="card-header bg-danger bg-opacity-25">Daftar Buku</div>
        <div class="card-body">
            @if ($books->count() > 0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->year }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Belum ada buku yang ditambahkan.</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
