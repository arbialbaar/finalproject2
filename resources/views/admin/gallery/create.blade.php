@extends('layout.admin')
@section('menuNavbar', 'active')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data Gallery</h1>
        <hr>
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar_product">Foto</label>
                <input type="file" name="gambar_product" class="form-control">
            </div>
            @error('gambar_product')
                <div class="text-center">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="product_id">Produk ID</label>
                <select name="product_id" id="product_id" class="form-control">
                    @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->title }}</option>
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

