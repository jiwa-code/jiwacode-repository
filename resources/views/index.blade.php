@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
    {{-- <div class="container-fluid col-11"> --}}
        <div class="row">
        <div class="col-lg-5 border my-auto">
            <h1>Hello,</h1>
            <h1 class="d-flex my-auto"><p class="gradient-font">Jiwa Code</p> Is Here,</h1>
            <h1>melayani <span id="auto-type">Web Development</span></h1>
        </div>
        <div class="col-lg-6 border">
            <img src="{{ asset("img/bgjiwacode.png") }}" alt="" srcset="" class="img-fluid float-end" width="100%">
        </div>
</div>
    {{-- </div> --}}

@endsection
