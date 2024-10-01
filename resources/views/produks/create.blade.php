@extends('layout')

@section('konten')


<div class="container">
    <h4 class="mb-3">Tambah Produk</h4>
    <form action="{{ route('produks.submit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nama Produks" id="title">
            </div>

            <!-- pesan error untuk title -->
            @error('title')
            <div class="col-sm-2"></div>
            <div class="alert alert-danger mt-2 col-sm-10">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">

                <!-- pesan error untuk gambar produk -->
                @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Masukkan Harga Produks" id="price">
            </div>
            <!-- peasan error untuk price -->
            @error('price')
            <div class="col-sm-2"></div>
            <div class="alert alert-danger mt-2 col-sm-10">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Masukkan Stok Produks" id="stok">
            </div>
            <!-- pesan error untuk stok -->
            @error('stok')
            <div class="col-sm-2"></div>
            <div class="alert alert-danger mt-2 col-sm-10">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label class="font-weight-bold col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Produks">{{ old('description') }}</textarea>
            </div>
            <!-- error message untuk description -->
            @error('description')
            <div class="col-sm-2"></div>
            <div class="alert alert-danger mt-2 col-sm-10">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3 mt-4">
            <button class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            <a href="{{route('produks.read')}}" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i>
                Batal
            </a>
        </div>
    </form>

</div>
<script>
    CKEDITOR.replace('description');
</script>
@endsection