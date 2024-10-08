<x-layout>
    <x-slot:title>{{$title}}</x-slot:title> 
    <main class="container mt-4">
        <div class="mb-3" style="display: flex; justify-content: flex-end;">
            <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>{{ $k->no_telpon }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $k->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $k->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="deleteModal{{ $k->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $k->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $k->id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus pegawai ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('pegawai.destroy', $k->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </tbody>
        </table>
    </main>  
</x-layout>