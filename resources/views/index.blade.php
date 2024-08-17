@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
    {{-- <div class="container-fluid col-11"> --}}
    <div class="d-flex mb-5">
        <div class="col-lg-6 d-flex align-items-center">
            <div class="col-lg-10 mx-auto ">
                <h1 style="font-size: 58">Hello,</h1>
                <h1 class="d-flex my-auto" style="font-size: 58"><p class="gradient-font me-3">Jiwa Code</p>Is Here,</h1>
                <h1 style="font-size: 58"> <span id="auto-type"></span></h1>
            </div>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset("img/bgjiwacode.png") }}" alt="" srcset="" class="img-fluid float-end " width="100%">
        </div>
    </div>

    <div id="bg-gradient" class="container-fluid">
        
        <div class="row py-5">
            <h1 class="text-light mb-3 py-4 col-lg-11 mx-auto " style="font-size: 50">Tentang Kami</h1>
            <div class="col-lg-6">

                <div class="col-lg-10 mx-auto">
                
                <P class="text-light fw-light fs-3 lh-base py-5 "> <span class="fw-semibold">Jiwa Code</span> adalah Jasa
                    Pembuatan Website Profesional yang mengedepankan website yang kami bangun bukan hanya sekedar
                    template tetapi tampilannya menarik dengan website yang bisa di akses di berbagai perangkat dengan
                    harga yang terjangkau. Jiwa Code dapat membangun sebuah website seperti Landing Page, Company Profile, Web Portofolio, Web Pendidikan, Web Personal, Sistem Informasi dan kebutuhan sistem yang klient inginkan.
                </P>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center ">
                
                <div class="container text-center ">
                    <div class="row g-3 justify-content-center">
                      <div class="col-lg-5 bg-tentang mx-2 rounded-4">
                        <img src="{{ asset("img/responsive.svg") }}" width="47%" height="45%" class="mt-5">
                        <div class="p-1 mb-3 fw-semibold fs-5">Responsive Website</div>
                      </div>
                      <div class="col-lg-5 bg-tentang mx-2 rounded-4">
                        <img src="{{ asset("img/harga.svg") }}" width="47%" height="45%" class="mt-5">
                        <div class="p-1 mb-3 fw-semibold fs-5">Harga Yang Terjangkau</div>
                      </div>
                      <div class="col-lg-5 bg-tentang mx-2 rounded-4">
                        <img src="{{ asset("img/tampilan.svg") }}" width="47%" height="45%" class="mt-5">
                        <div class="p-1 mb-3 fw-semibold fs-5">Tampilan Menarik</div>
                      </div>
                      <div class="col-lg-5 bg-tentang mx-2 rounded-4">
                        <img src="{{ asset("img/design.svg") }}" width="47%" height="45%" class="mt-5">
                        <div class="p-1 mb-3 fw-semibold fs-5">Desain Tidak Template</div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>

    </div>
    {{-- </div> --}}

@endsection
