@extends('layout.user')
@section('title', 'TaniTech')
@section('menuHome', 'active')
@section('content')

@foreach ($home as $item)

<div class="jumbotron-fluid bg-secondary text-light py-5 px-5 text-center" id="compro">
    <div class="row py-5">
        <div class="col-md-12">
            <h1 class="compro pt-5">{{ $item->brand }}</h1>
            <p style="font-size: 20px;" class="pb-5">{{ $item->brand_desc }}</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 id="aboutvh" class="mb-5"><u>About Us</u></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-secondary" id="aboutvh">Visi</h5>
            <p>{{ $item->visi }}</p>
        </div>
        <div class="col md-6">
            <h5 class="text-secondary" id="aboutvh">Misi</h5>
            <p>{{ $item->misi }}</p>
        </div>
    </div>
</div>



@endforeach

@endsection
