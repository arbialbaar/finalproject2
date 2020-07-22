@extends('layout.admin')
@section('menuHome', 'active')
@section('content')

<div class="container-fluid">
    <!-- Content Header -->
    <h1>Edit Data Home</h1>
    <hr>

    <!-- Create Form -->
        <form action="{{ route('home.update', ['home' => $home->id]) }}" method="POST">
            @method('PATCH')
            @csrf
             <!-- First Row -->
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="brand">brand</label>
                    <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ old('brand') ?? $home->brand }}" >
                    @error('brand')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="brand_desc">Deskrips</label>
                        <input type="text" class="form-control @error('brand_desc') is-invalid @enderror" id="brand_desc" name="brand_desc" value="{{ old('brand_desc') ?? $home->brand_desc }}" >
                        @error('brand_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="visi">visi</label>
                        <textarea name="visi" id="visi" rows="3" class="form-control">{{ old('visi') ?? $home->visi }}</textarea>
                        @error('visi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="misi">misi</label>
                        <textarea name="misi" id="misi" rows="3" class="form-control">{{ old('misi') ?? $home->misi }}</textarea>
                        @error('misi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary nb-2">Simpan</button>
        </form>
</div>

@endsection