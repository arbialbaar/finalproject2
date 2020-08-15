@extends('layout.admin')
@section('menuclient', 'active')
@section('content')

<div class="container-mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-2">
                <a href="{{ route('client.create') }}" class="btn btn-success fa fa-plus"> Create Data</a>
            </div>
            <table class="table table-hover text-center">
                <thead class="thead-dark">
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($client as $clients)
                        <tr>
                            <td>
                                <img src="{{ Storage::url($clients->image_client) }}" alt="image_client" style="width: 200px">
                            </td>
                             <td>
                                <form action="{{ route('client.destroy', $clients->id) }}" method="POST">
                                    <a class="btn btn-primary fa fa-edit" href="{{ route('client.edit', $clients->id) }}"> Edit</a>
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