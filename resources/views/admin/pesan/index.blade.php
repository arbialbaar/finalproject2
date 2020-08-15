@extends('layout.admin')
@section('menuPesan', 'active')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

            <!-- Content Header -->
            <div class="py-4">
                <h2>Tabel data halaman pesan</h2>
            </div>


            <!-- Karyawan Index Table -->
            <table id="myTable" class="display table table-striped">
                <thead>
                    <th>Pesan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                </thead>
                <tbody>
                    @forelse ($pesan as $item)
                    <tr>
                        <td>{{$item->pesan}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->no_hp}}</td>
                        <td>
                            <form action="{{ route('pesan.destroy',['pesan' => $item->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <td colspan="9" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
