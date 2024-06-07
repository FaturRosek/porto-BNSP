<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="nama" id="nama" placeholder="Nama Laptop"
                                class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="harga" id="harga" placeholder="Harga"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="ukuran" id="ukuran" placeholder="Ukuran (Inch)"
                                class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="prosesor" id="prosesor" class="form-control"
                                placeholder="Prosesor">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="memori" id="memori" class="form-control"
                                placeholder="Memori">
                        </div>
                        <div class="col">
                            <input type="text" name="storage" id="storage" class="form-control"
                                placeholder="Storage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="file" name="gambar" id="gambar" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="sumbit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
