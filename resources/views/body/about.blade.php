@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
 
<div class="tw-flex ">
    <div class="tw-flex-none tw-w-full md:tw-w-7/12 tw-my-auto">
        <div class="tw-w-fit tw-my-12 md:tw-w-9/12 sm:tw-my-6 tw-mx-auto ">
            <h1 class="2xl:tw-text-8xl xl:tw-text-7xl lg:tw-text-6xl md:tw-text-5xl sm:tw-text-5xl tw-text-5xl tw-text-black tw-font-medium tw-text-center md:tw-text-left">Tentang Kami</h1>
            <h6 class="2xl:tw-text-2xl xl:tw-text-lg lg:tw-text-base md:tw-text-base sm:tw-text-base tw-text-xl tw-text-black tw-font-normal tw-mt-4 tw-text-center md:tw-text-left ">Apa itu Jiwa Code? Bisa ngapain aja sih?</h6>
           
        </div>
      </div>
      <div class="tw-flex-none sm:tw-flex-initial tw-w-0 md:tw-w-5/12 xl:tw-mb-20">
            <img src="{{ asset("img/about1.svg") }}"  class="tw-w-0 md:tw-visible 2xl:tw-w-9/12 xl:tw-w-10/12 lg:tw-w-10/12 md:tw-w-10/12" >
      </div>
</div>

<div class="tw-w-full tw-my-16">
    <div class="tw-w-10/12 tw-mx-auto tw-flex tw-py-12" id="bg-gradient">

        <div class="tw-flex-none sm:tw-flex-initial tw-w-0 xl:tw-w-6/12 lg:tw-w-7/12 tw-mx-auto tw-my-auto">
            <img src="{{ asset("img/about2.svg") }}"  class="tw-w-0 md:tw-visible xl:tw-w-12/12 lg:tw-w-10/12 md:tw-w-10/12 tw-mx-auto" >
      </div>
      
      <div class="tw-flex-none sm:tw-flex-initial tw-w-0 md:tw-w-6/12 tw-my-auto">
            <div class="tw-w-11/12  ">
                <h2 class="tw-text-white tw-font-light 2xl:tw-text-2xl xl:tw-text-xl lg:tw-text-lg">Apa itu Jiwa Code</h2>
                <h1 class="tw-text-white tw-font-medium 2xl:tw-text-4xl xl:tw-text-3xl lg:tw-text-2xl tw-mt-1">A Website Development Service</h1>
                <p class="tw-text-white tw-font-light 2xl:tw-text-xl xl:tw-text-lg lg:tw-text-base tw-mt-6 tw-mb-8 tw-leading-normal"> Atau biasa disebut <span class="tw-font-medium">jasa pembuatan website.</span>
                    Kami mengedepankan pembuatan website dengan tampilan menarik, karena menurut hasil riset, desain web yang
                    baik akan membuat para penggunanya memorable dan susah berpaling. Karena sudah terbiasa dengan tampilan yang
                    ada sehingga membuat pengunjung tidak merasa keberatan menghabiskan waktunya untuk menjelajahi website.
                </p>

                <div class="2xl:tw-w-8/12 xl:tw-w-11/12 2xl:tw-text-xl xl:tw-text-lg lg:tw-text-base tw-mx-auto tw-flex tw-text-white tw-font-light">
                    <div class="tw-w-6/12 ">
                        <ul class="tw-list-disc tw-leading-normal">
                            <li>Landing Page</li>
                            <li>Web Portofolio</li>
                        </ul>
                    </div>

                    <div class="tw-w-6/12">
                        <ul class="tw-list-disc tw-leading-normal">
                            <li>Digitalisasi Pendidikan</li>
                            <li>Sistem Informasi</li>
                        </ul>
                    </div>

                </div>

         </div>
      </div>

    </div>
    
</div>

@endsection
