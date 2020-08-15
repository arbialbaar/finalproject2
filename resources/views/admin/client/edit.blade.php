@extends('layout.admin')
@section('menuClient', 'active')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data client</h1>
        <hr>
        <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf            
            <div class="form-group">
                <label for="image_client">Foto</label>
                <input type="file" name="image_client" class="form-control">
            </div>
            @error('image_client')
                <div class="text-center">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </form>
    </div>
</div>

@endsection
