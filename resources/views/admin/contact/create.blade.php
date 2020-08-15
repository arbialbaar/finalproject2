@extends('layout.admin')
@section('menuContact', 'active')
@section('content')

<!-- Karyawan Create Content -->
<div class="container-fluid">
    <!-- Content Header -->
    <h1>Data Contact</h1>
    <hr>

    <!-- Create Form -->
        <form action="{{ route('contact.store') }}" method="POST">
             @csrf
             <!-- First Row -->
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="admin">Admin</label>
                    <input type="text" class="form-control @error('admin') is-invalid @enderror" id="admin" name="admin" value="{{ old('admin') }}" >
                    @error('admin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <textarea name="no_hp" id="no_hp" rows="3" class="form-control">{{ old('no_hp') }}</textarea>
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary nb-2">Simpan</button>
        </form>
</div>

@endsection