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
    <div class="row mb-5">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19932.545615500694!2d106.71337509320466!3d-6.189934262020217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c8abf008c555935!2simportir.org!5e0!3m2!1sen!2sid!4v1597460517268!5m2!1sen!2sid" width="1100" height="600" frameborder="0" style="border:0; text-align:center;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md 12">
            @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
        @endif
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-7">
            <form action="{{ route('pesan.store') }}" method="POST">
                @csrf
                       <div class="form-group">
                           <label for="Pesan">Masukkan Pesan</label>
                           <textarea name="pesan" id="pesan" rows="4" class="form-control">{{ old('pesan') }}</textarea>
                           @error('pesan')
                               <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Masukkan Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" >
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Masukkan email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" >
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                       <div class="form-group">
                           <label for="no_hp">No HP</label>
                           <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" >
                           @error('no_hp')
                               <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                <button type="submit" class="btn btn-primary nb-2">Simpan</button>
           </form>
        </div>
        @foreach ($contact as $item)
        <div class="col-md-5">
            <h5>Alamat: <br> {{ $item->alamat }}</h5>
            <h5>Admin: <br> {{ $item->admin }}</h5>
            <h5>No.HP: <br> {{ $item->no_hp }}</h5>
        </div>
        @endforeach
    </div>
</div>

@endsection
