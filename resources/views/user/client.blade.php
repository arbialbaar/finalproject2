@extends('layout.user')
@section('title', 'TaniTech')
@section('menuClient', 'active')  
@section('content')

<div class="jumbotron-fluid bg-secondary text-light py-5 px-5 text-center" id="compro">
    <div class="row py-5">
        <div class="col-md-12 py-5">
            <h1 class="compro">Client</h1>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        {{-- @foreach ($client as $item)
        <div class="col-md-3">
            <img src="{{ $item->image_client }}" class="card-img-top" alt="...">
        </div>
        @endforeach --}}
    </div>    
</div>

@endsection