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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($product as $products)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ Storage::url($products->image_product) }}" alt="image_product" style="width: 200px">
                            </td>
                            <td>{{ $products->title }}</td>
                            <td>{{ $products->description }}</td>
                             <td>
                                <form action="{{ route('admin.product.destroy', $products->id) }}" method="POST">
                                    <a class="btn btn-primary fa fa-edit" href="{{ route('admin.product.edit', $products->id) }}"> Edit</a>
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
