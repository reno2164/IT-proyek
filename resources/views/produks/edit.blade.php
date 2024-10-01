@extends('layout')

@section('konten')

<h4>Edit Produk</h4>

    <form action="{{ route('produks.update', $produks->id)}}" method="POST" > 
        @csrf
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" name="title" value="{{ $produks->title }}" class="form-control" id="title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-10">
            <input type="file" name="image" value="{{ $produks->image }}" class="form-control" id="image">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
            <input type="number" name="price" value="{{ $produks->price }}" class="form-control" id="price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
            <input type="number" name="stok" value="{{ $produks->stok }}" class="form-control" id="stok">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description" value="{{ $produks->description }}"></textarea>
            </div>
        </div> 
        <div class="mb-3 mt-4">
            <button class="btn btn-primary">Edit</button>
            <a href="{{route('produks.read')}}" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i> 
                Batal
            </a>
        </div> 
    </form>
    
@endsection
