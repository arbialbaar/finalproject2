@extends('layout.user')
@section('title', 'TaniTech')
@section('menuProduct', 'active')
@section('content')

<div class="jumbotron-fluid bg-secondary text-light py-5 px-5 text-center" id="compro">
    <div class="row py-5">
        <div class="col-md-12 py-5">
            <h1 class="compro">Our Product</h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        @foreach ($gallery as $item)
        <div class="col-md-3">
            <div class="card">
                <img src="{{  Storage::url($item->gambar_product)  }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->product->title }}</h5>
                  <p class="card-text">{{ $item->product->description }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





@endsection
