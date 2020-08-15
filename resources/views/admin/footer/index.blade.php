@extends('layout.admin')
@section('menuHome', 'active')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

            <!-- Content Header -->
            <div class="py-4">
                <h2>Halaman Footer</h2>
                <a href="{{ route('footer.create') }}" class="btn btn-primary">
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
                    <th>Deskripsi Alamat</th>
                </thead>
                <tbody>
                    @forelse ($footer as $item)
                    <tr>
                        <td>{{$item->address}}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('footer.edit',['footer' => $item->id]) }}" class="btn btn-primary" id="btn">
                                Edit
                            </a>
                            <form action="{{ route('footer.destroy',['footer' => $item->id]) }}" method="POST">
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
