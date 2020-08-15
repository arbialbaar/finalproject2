@extends('layout.admin')
@section('menuContact', 'active')
@section('content')

<div class="container-fluid">
    <!-- Content Header -->
    <h1>Edit Data Contact</h1>
    <hr>

    <!-- Create Form -->
        <form action={{ route('contact.update', $contact->id) }} method="POST">
            @method('PATCH')
            @csrf
             <!-- First Row -->
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') ?? $contact->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="admin">admin</label>
                        <textarea name="admin" id="admin" rows="3" class="form-control">{{ old('admin') ?? $contact->admin }}</textarea>
                        @error('admin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') ?? $contact->no_hp }}" >
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
