@extends('layout.admin')
@section('menuHome', 'active')
@section('content')
    
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

            <!-- Content Header -->
            <div class="py-4">
                <h2>Tabel data halaman home</h2>
                <a href="{{ url('admin/home/create') }}" class="btn btn-primary">
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
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Edit</th>
                </thead>
                <tbody>
                    @forelse ($home as $item)
                    <tr>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->brand_desc}}</td>
                        <td>{{$item->visi}}</td>
                        <td>{{$item->misi}}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('home.edit',['home' => $item->id]) }}" class="btn btn-primary" id="btn">
                                Edit
                            </a>
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