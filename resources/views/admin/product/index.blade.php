@extends('layout.admin')
@section('menuProduct', 'active')
@section('content')

<div class="container-mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-2">
                <a href="{{ route('admin.product.create') }}" class="btn btn-success fa fa-plus"> Create Data</a>
            </div>
            <table class="table table-hover text-center">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{--  <td>
                                <img src="{{ Storage::url($product->image_product) }}" alt="image_product" style="width: 200px">
                            </td>  --}}
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                             <td>
                                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                    <a class="btn btn-primary fa fa-edit" href="{{ route('admin.product.edit', $product->id) }}"> Edit</a>
                                    ||
                                    @csrf
                                    @method('Delete')

                                    <button type="submit" class="btn btn-danger fa fa-trash" onclick="return confirm('Are You Sure?')"> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
