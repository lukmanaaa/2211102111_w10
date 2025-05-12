@extends('layouts.app')

@section('title', 'Lukmana')

@section('content')
    <h1 class="text-muted">Lukman Adiansyah</h1>
    <h2 class="mb-4">Perpustakaan Online</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form Tambah Buku --}}
    <div class="card mb-4">
        <div class="card-header bg-danger bg-opacity-25">Tambah Buku</div>
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                @include('books._form', ['book' => null])
                <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
            </form>
        </div>
    </div>

    {{-- Tabel Buku --}}
    <div class="card">
        <div class="card-header bg-danger bg-opacity-25">Daftar Buku</div>
        <div class="card-body">
            @if ($books->count())
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->year }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $book->id }}">Edit</button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $book->id }}">Hapus</button>
                                </td>
                            </tr>

                            {{-- Include Modals --}}
                            @include('books.modals.edit', ['book' => $book])
                            @include('books.modals.delete', ['book' => $book])
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Belum ada data buku.</p>
            @endif
        </div>
    </div>
@endsection
