@extends('layout.admin')
@section('menuclient', 'active')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Data client</h1>
        <hr>
        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
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

