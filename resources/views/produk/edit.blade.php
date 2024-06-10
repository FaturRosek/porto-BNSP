@foreach ($produk as $p)
    <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="nama" id="nama" placeholder="Nama Laptop"
                                    class="form-control" value="{{ $p->nama }}">
                            </div>
                            <div class="col">
                                <input type="text" name="harga" id="harga" placeholder="Harga"
                                    class="form-control" value="{{ $p->harga }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="ukuran" id="ukuran" placeholder="Ukuran (Inch)"
                                    class="form-control" value="{{ $p->ukuran }}">
                            </div>
                            <div class="col">
                                <input type="text" name="prosesor" id="prosesor" class="form-control"
                                    placeholder="Prosesor" value="{{ $p->prosesor }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="memori" id="memori" class="form-control"
                                    placeholder="Memori" value="{{ $p->memori }}">
                            </div>
                            <div class="col">
                                <input type="text" name="storage" id="storage" class="form-control"
                                    placeholder="Storage" value="{{ $p->storage }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            @if ($p->gambar)
                                <div class="mb-3">
                                    <img src="{{ asset($p->gambar) }}" alt="gambar" style="max-width: 100px;">
                                </div>
                            @endif
                            <div class="col">
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="sumbit" class="btn btn-primary">Update</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endforeach
