@extends('layout.admin')
@section('menuHome', 'active')
@section('content')

<div class="container-fluid">
    <!-- Content Header -->
    <h1>Edit Data Footer</h1>
    <hr>

    <!-- Create Form -->
        <form action="{{ url('/footer/'.$footer->id) }}" method="POST">
            @method('PATCH')
            @csrf
             <!-- First Row -->
             <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address Description</label>
                        <textarea name="address" id="address" rows="3" class="form-control">{{ old('address') ?? $footer->address }}</textarea>
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
