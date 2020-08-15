@extends('layout.admin')
@section('menuNavbar', 'active')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data Gallery</h1>
        <hr>
        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="image_gallery">Foto</label>
                <input type="file" name="image_gallery" class="form-control">
            </div>
            @error('gambar_product')
                <div class="text-center">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="product_id">Category Produk</label>
                <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ (old('product_id') ?? $gallery->product->product_id) === $gallery->product_id ? 'selected' : '' }}>{{ $gallery->product_id }}</option>
                    @endforeach
                </select>
                @error('product_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </form>
    </div>
</div>

@endsection
