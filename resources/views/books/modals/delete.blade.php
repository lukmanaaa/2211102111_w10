<div class="modal fade" id="deleteModal{{ $book->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ route('books.destroy', $book->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Hapus Buku</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Yakin ingin menghapus buku <strong>"{{ $book->title }}"</strong>?
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Hapus</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
          </div>
      </form>
    </div>
  </div>
  