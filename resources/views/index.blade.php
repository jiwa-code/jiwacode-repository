@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
      <div class="tw-flex">
        <div class="tw-flex-none tw-w-full md:tw-w-6/12 tw-my-auto">
            <div class="tw-w-fit tw-my-12 md:tw-w-9/12 sm:tw-my-6 tw-mx-auto ">
                <h1 class="2xl:tw-text-6xl xl:tw-text-5xl lg:tw-text-4xl md:tw-text-3xl sm:tw-text-4xl tw-text-4xl tw-text-black tw-font-medium">Hello</h1>
                <h1 class="2xl:tw-text-6xl xl:tw-text-5xl lg:tw-text-4xl md:tw-text-3xl sm:tw-text-4xl tw-text-4xl tw-flex 2xl:tw-my-9 xl:tw-my-7 lg:tw-my-5 md:tw-my-3 tw-my-3 tw-text-black tw-font-medium">
                <span class="gradient-font tw-mr-4">Jiwa Code</span>Is Here</h1>
                <h1 class="2xl:tw-text-6xl xl:tw-text-5xl lg:tw-text-4xl md:tw-text-3xl sm:tw-text-4xl tw-text-4xl tw-text-black tw-font-medium"> <span id="auto-type"></span></h1>
            </div>
          </div>
          <div class="tw-flex-none sm:tw-flex-initial tw-w-0 md:tw-w-6/12">
                <img src="{{ asset("img/bgjiwacode.png") }}"  class="tw-w-0 md:tw-visible md:tw-w-full" >
          </div>
    </div>

    <div class="md:tw-flex tw-py-24" id="bg-gradient">
      <div class="tw-flex-none tw-w-full md:tw-w-6/12">

        <div class="tw-w-9/12 tw-mx-auto ">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset("img/ss-web/kalkulatorMR.png") }}" class="d-block w-100 rounded-4" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset("img/ss-web/meca.png") }}" class="d-block w-100 rounded-4" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset("img/ss-web/landingpageMR.png") }}" class="d-block w-100 rounded-4" alt="...">
            </div>
          </div>
        </div>
      </div>

      </div>

      <div class="tw-flex-none tw-w-full md:tw-w-6/12 tw-my-auto">

        <div class="tw-w-9/12 tw-mx-auto tw-flex tw-flex-col tw-items-center md:tw-items-start">
        <h2 class="tw-text-white tw-mt-5 tw-text-2xl sm:tw-text-4xl sm:tw-mt-8 2xl:tw-text-5xl xl:tw-text-4xl lg:tw-text-3xl md:tw-text-2xl tw-font-medium ">Mari Wujudkan Sistem Keinginan Anda</h2>
        <h5 class="tw-text-slate-400 tw-mt-3 tw-mb-10 tw-text-xl sm:tw-text-2xl sm:tw-mt-2 sm:tw-mb-10 2xl:tw-text-3xl xl:tw-text-2xl lg:tw-text-xl md:tw-text-md 2xl:tw-mt-4 xl:tw-mt-2 md:tw-mt-1 2xl:tw-mb-10 xl:tw-mb-7 lg:tw-mb-6 md:tw-mb-4 tw-font-normal ">Mulai bangun website keinginan anda bersama kita.</h5>
        <a href="" class="tw-bg-slate-50 hover:tw-bg-slate-200 tw-px-8 tw-py-3 sm:tw-px-32 tw-font-medium sm:tw-py-4 2xl:tw-px-52 xl:tw-px-40 lg:tw-px-28 md:tw-px-16 2xl:tw-py-5 xl:tw-py-4 lg:tw-py-3 md:tw-py-2 tw-rounded-xl 2xl:tw-text-xl xl:tw-font-medium tw-inline-block">Mulai Perjalanan</a>
        </div>

      </div>

    </div>
   

    {{-- uji --}}

@endsection
