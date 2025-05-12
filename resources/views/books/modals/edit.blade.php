<div class="modal fade" id="editModal{{ $book->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ route('books.update', $book->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Buku</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('books._form', ['book' => $book])
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
      </form>
    </div>
  </div>
  