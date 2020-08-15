@extends('layout.user')
@section('title', 'TaniTech')
@section('menuContact', 'active')
@section('content')

<div class="jumbotron-fluid bg-secondary text-light py-5 px-5 text-center">
    <div class="row py-5">
        <div class="col-md-12 py-5">
            <h1 class="compro">Contact Us</h1>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19932.545615500694!2d106.71337509320466!3d-6.189934262020217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c8abf008c555935!2simportir.org!5e0!3m2!1sen!2sid!4v1597460517268!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        @foreach ($contact as $item)
        <div class="col-md-6">
            <h4>Alamat: {{ $item->alamat }}</h4><br>
            <h4>Admin: {{ $item->admin }}</h4>
            <h4>No.HP: {{ $item->no_hp }}</h4>
        </div>
        @endforeach
    </div>
</div>

@endsection
