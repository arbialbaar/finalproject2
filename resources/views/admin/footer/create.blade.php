@extends('layout.admin')
@section('menuHome', 'active')
@section('content')

<!-- Karyawan Create Content -->
<div class="container-fluid">
    <!-- Content Header -->
    <h1>Data Footer</h1>
    <hr>

    <!-- Create Form -->
        <form action="{{ route('footer.store') }}" method="POST">
             @csrf
             <!-- First Row -->
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address Desctiption</label>
                        <textarea name="address" id="address" rows="3" class="form-control">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary nb-2">Simpan</button>
        </form>
</div>

@endsection