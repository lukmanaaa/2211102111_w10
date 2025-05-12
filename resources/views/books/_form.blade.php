<div class="row g-3">
    <div class="col-md-6">
        <input type="text" name="title" class="form-control" placeholder="Judul" value="{{ old('title', $book->title ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <input type="text" name="author" class="form-control" placeholder="Penulis" value="{{ old('author', $book->author ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <input type="text" name="publisher" class="form-control" placeholder="Penerbit" value="{{ old('publisher', $book->publisher ?? '') }}" required>
    </div>
    <div class="col-md-6">
        <input type="number" name="year" class="form-control" placeholder="Tahun" value="{{ old('year', $book->year ?? '') }}" min="1000" max="9999" required>
    </div>
</div>
