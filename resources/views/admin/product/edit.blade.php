@extends('layout.admin')
@section('menuProduct', 'active')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data Product</h1>
        <hr>
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf            
            <div class="form-group">
                <label for="image_product">Foto</label>
                <input type="file" name="image_product" class="form-control">
            </div>
            @error('image_product')
                <div class="text-center">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $product->title }}">
            </div>
            @error('title')
                <div class="text-center">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5">
                    {{ old('description') ?? $product->description }}
                </textarea>
              </div>
            @error('description')
                <div class="text-center">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </form>
    </div>
</div>

@endsection
