<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center mb-3">
                    <div class="col">
                        <h2 class="m-0">Data Produk</h2>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('products.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Produk</a>
                    </div>
                </div>
                <div class="card border shadow-sm rounded">
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">no</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga/kg</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $no=>$product)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                        <td>{{ $product->stok }}</td>
                                        <td class="">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-dark"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Products belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    
    </script>
</x-layout>
