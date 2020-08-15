@extends('layout.admin')
@section('menuContact', 'active')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

            <!-- Content Header -->
            <div class="py-4">
                <h2>Tabel data halaman home</h2>
                <a href="{{ route('contact.create') }}" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>

            <!-- Alert -->
            @if (session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <!-- Karyawan Index Table -->
            <table id="myTable" class="display table table-striped">
                <thead>
                    <th>Alamat</th>
                    <th>Admin</th>
                    <th>No Hp</th>
                </thead>
                <tbody>
                    @forelse ($contact as $item)
                    <tr>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->admin}}</td>
                        <td>{{$item->no_hp}}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('contact.edit',['contact' => $item->id]) }}" class="btn btn-primary" id="btn">
                                Edit
                            </a>
                            <form action="{{ route('contact.destroy',['contact' => $item->id]) }}" method="POST">
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
