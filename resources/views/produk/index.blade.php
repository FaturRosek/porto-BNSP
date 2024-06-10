@extends('layout.app')

@section('konten')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @session('status')
            <div class="alert alert-primary" role="alert">
                {{ $value }}
            </div>
        @endsession
        <div class="container">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    Tambah Data
                </button>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr style="text-align: center; vertical-align: middle">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Ukuran</th>
                        <th>Prosesor</th>
                        <th>Memori</th>
                        <th>Storage</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="produk_body">
                    @foreach ($produk as $p)
                        <tr style="text-align: center; vertical-align: middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->harga }}</td>
                            <td>{{ $p->ukuran }}</td>
                            <td>{{ $p->prosesor }}</td>
                            <td>{{ $p->memori }}</td>
                            <td>{{ $p->storage }}</td>
                            <td>
                                <img src="{{ asset($p->gambar) }}" style="width: 50px; height:50px;" alt="Img" />
                            </td>
                            <td>
                                {{-- <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $p->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0 delete-button" data-id="{{ $p->id }}"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('produk.edit')
            </table>
            @include('produk.create')
        </div>
    </main>
@endsection
