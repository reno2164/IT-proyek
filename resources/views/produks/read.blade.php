@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Daftar Produk</h4>
    <div class="ms-auto">
        <a class="btn btn-success mb-3" href="{{ route('produks.create') }}"> <i class="fa fa-plus"></i> tambah Produk</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table align-middle table-bordered">
        <thead>
            <tr>
                <th>no.</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>deskripsi</th>
                <th>Aksi</th>               
            </tr>
        </thead>
        @foreach ($produks as $no=>$data)
        <tbody>
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{$data->title}}</td>
                <td>
                    <img src="{{ asset('/storage/produks/'.$data->image) }}" class="rounded" style="width: 150px">
                </td>
                <td>{{"Rp " . number_format($data->price,2,',','.')}}</td>
                <td>{{$data->stok}}</td>
                <td>{{$data->description}}</td>
                <td>
                    <a href="{{route('produks.edit', $data->id)}}" class="btn btn-sm btn-warning d-inline"> <i class="fa fa-pencil"></i></a>
                    <form action="{{ route('produks.delete', $data->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus??')" type="submit"><i class="fa fa-trash"></i></button>
                    </form> 

                </td>               
            </tr>
        </tbody>
        
        @endforeach 
    </table>
</div>

@endsection
