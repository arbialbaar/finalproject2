@extends('layout.admin')
@section('menuNavbar', 'active')
@section('content')

<div class="container-mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-2">
                <a href="{{ route('gallery.create') }}" class="btn btn-success fa fa-plus"> Create Data</a>
            </div>
            <table class="table table-hover text-center">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Image</th>
                    <th>Product ID</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ Storage::url($item->gambar_product) }}" alt="gambar_product" style="width: 200px">
                            </td>
                            <td>{{ $item->product->title }}</td>
                             <td>
                                <form action="{{ route('gallery.destroy', $item->id) }}" method="POST">
                                    <a class="btn btn-primary fa fa-edit" href="{{ route('gallery.edit', $item->id) }}"> Edit</a>
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
