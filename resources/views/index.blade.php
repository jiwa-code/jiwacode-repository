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
          <div class="tw-flex-none sm:tw-flex-initial tw-w-0 md:tw-w-6/12 xl:tw-mb-20">
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
        <a href="#list_harga" class="tw-bg-slate-50 hover:tw-bg-slate-200 tw-px-8 tw-py-3 sm:tw-px-32 tw-font-medium sm:tw-py-4 2xl:tw-px-52 xl:tw-px-40 lg:tw-px-28 md:tw-px-16 2xl:tw-py-5 xl:tw-py-4 lg:tw-py-3 md:tw-py-2 tw-rounded-xl 2xl:tw-text-xl xl:tw-font-medium tw-inline-block">Mulai Perjalanan</a>
        </div>

      </div>

    </div>



    <div class="tw-w-full tw-py-9">
        <div class="tw-w-12/12">
            <div class="">
                <p class="md:tw-text-xl tw-text-md text-center tw-text-[#858585] tw-font-semibold">Keunggulan Yang Dimiliki</p>
                <p class="md:tw-text-5xl tw-text-3xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
            </div>
        </div>


        <div class="md:tw-w-11/12 xl:tw-w-10/12 md:tw-flex tw-flex-none tw-mx-auto 2xl:tw-gap-x-28 xl:tw-gap-x-10 lg:tw-gap-x-7 md:tw-gap-x-5 tw-mt-24 ">

          <div class="tw-mx-auto tw-w-9/12 md:tw-w-3/12 tw-shadow-2xl tw-rounded-xl tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <img src="{{ asset("img/undraw/bar.svg") }}" width=""  class="tw-mx-auto 2xl:tw-w-48 xl:tw-w-36 lg:tw-w-32 md:tw-w-28 tw-w-48 lg:tw-mb-6 tw-mt-12 tw-pt-8 tw-mb-4">
            <h3 class="tw-w-10/12 tw-text-center tw-font-semibold tw-text-lg tw-mx-auto 2xl:tw-mb-8 xl:tw-mb-11 lg:tw-mb-10 md:tw-mb-10 tw-mb-8">Kustomisasi Tampilan</h3>
            <h6 class="tw-w-10/12 tw-text-center tw-font-normal tw-text-md tw-mx-auto tw-mb-16 tw-pb-5">Bebas Kustomisasi Tampilan Website Yang Anda Inginkan</h6>
          </div>

          <div class="tw-mx-auto tw-w-9/12 md:tw-w-3/12 tw-shadow-2xl tw-rounded-xl tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <img src="{{ asset("img/undraw/certificate.svg") }}" width=""  class="tw-mx-auto 2xl:tw-w-28 xl:tw-w-24 lg:tw-w-20 md:tw-w-16 tw-w-28 tw-mt-12 tw-pt-8 tw-mb-4">
            <h3 class="tw-w-10/12 tw-text-center tw-font-semibold tw-text-lg tw-mx-auto 2xl:tw-mb-8 xl:tw-mb-14 lg:tw-mb-10 md:tw-mb-11 tw-mb-8">Tim Yang Profesional</h3>
            <h6 class="tw-w-10/12 tw-text-center tw-font-normal tw-text-md tw-mx-auto tw-mb-16 tw-pb-5">Tim Yang Handal Untuk Pembuatan Website Anda</h6>
          </div>

          <div class="tw-mx-auto tw-w-9/12 md:tw-w-3/12 tw-shadow-2xl tw-rounded-xl tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <img src="{{ asset("img/undraw/chatting.svg") }}" width=""  class="tw-mx-auto 2xl:tw-w-40 xl:tw-w-32 lg:tw-w-28 md:tw-w-24 tw-w-40 tw-mt-12 tw-pt-8 tw-mb-4">
            <h3 class="tw-w-10/12 tw-text-center tw-font-semibold tw-text-lg tw-mx-auto tw-mb-8">Customer Service 24/7</h3>
            <h6 class="tw-w-10/12 tw-text-center tw-font-normal tw-text-md tw-mx-auto tw-mb-16 tw-pb-5">Customer Service Tersedia 24 Jam Dan Langsung Di Tangani Oleh Tim Support Kami</h6>
          </div>

          <div class="tw-mx-auto tw-w-9/12 md:tw-w-3/12 tw-shadow-2xl tw-rounded-xl tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <img src="{{ asset("img/undraw/discount.svg") }}" width=""  class="tw-mx-auto 2xl:tw-w-56 xl:tw-w-44 lg:tw-w-40 md:tw-w-36 tw-w-56 tw-mt-12 tw-pt-8 tw-mb-4">
            <h3 class="tw-w-10/12 tw-text-center tw-font-semibold tw-text-lg tw-mx-auto tw-mb-8">Harga Yang Terjangkau</h3>
            <h6 class="tw-w-10/12 tw-text-center tw-font-normal tw-text-md tw-mx-auto tw-mb-16 tw-pb-5">Biaya Pembuatan Website Tidak Membangkak Untuk Tampilan Yang Menarik</h6>
          </div>


        </div>

        </div>





{{-- uji --}}
<div class="tw-w-full tw-py-9  tw-bg-[#F3F3F3] ">
    {{-- <div class="tw-w-11/12">
        <div class="">
            <p class="tw-text-xl text-center tw-text-[#858585] tw-font-semibold">Projek Yang Telah Dikerjakan</p>
            <p class="tw-text-5xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
        </div>
    </div>

<div class="tw-w-full tw-mt-14">
    <div class="row tw-w-11/12 mx-auto">
        <div class="tw-w-8/12">
            <div class=" mx-auto tw-w-6/6 tw-bg-white tw-py-4 tw-rounded-md tw-shadow-lg">
                <div class="tw-w-9/12 mx-auto tw-py-5">
                    <img src="{{ asset("img/kalkulator MR.png") }}" class="tw-w-full mx-auto" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="tw-w-4/12">
            <div class="tw-w-10/12 mx-auto">
                <div class="tw-my-5">
                    <p class="tw-text-2xl text-start tw-font-semibold">Kalkulator Perhitungan MR Yearbook</p>
                </div>
                <div>
                    <p class="tw-text-base">Kalkulator Perhitungan MR Yearbook ini adalah sebuah <b> sistem </b>berbasis website yang memudahkan agar tidak perlu melakukan perhitungan secara manual. Hanya perlu menginputkan HPP, sistem akan merinci HPP yang di input dan sistem akan menampilkan <b> Pendapatan Kotor</b> sesuai HPP yang di input kan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row tw-w-11/12 tw-py-28 mx-auto">
        <div class="tw-w-4/12">
            <div class="tw-w-10/12 mx-auto">
                <div class="tw-my-4">
                    <p class="tw-text-2xl text-start tw-font-semibold">Landing Page Mecca Studios</p>
                </div>
                <div>
                    <p class="tw-text-base">Website ini termasuk ke kategori <b> Landing Page</b>. terdiri dari 4 halaman terdiri dari “Beranda” untuk mengenalkan vendor dan juga layanan jasa yang di berikan, juga ada halaman “Meca Team” yaitu anggota tim di vendor tersebut, selanjutnya ada halaman “Our Works” yang isinya layaknya album foto, dan juga halaman “Kontak”.</p>
                </div>
            </div>
        </div>
        <div class="tw-w-8/12">
            <div class=" mx-auto tw-w-6/6 tw-bg-white tw-py-4 tw-rounded-md tw-shadow-lg">
                <div class="tw-w-9/12 mx-auto tw-py-5">
                    <img src="{{ asset("img/landing page.png") }}" class="tw-w-full mx-auto" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="row tw-w-11/12 mx-auto">
        <div class="tw-w-8/12">
            <div class=" mx-auto tw-w-6/6 tw-bg-white tw-py-4 tw-rounded-md tw-shadow-lg">
                <div class="tw-w-9/12 mx-auto tw-py-5">
                    <img src="{{ asset("img/kalkulator MR.png") }}" class="tw-w-full mx-auto" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="tw-w-4/12">
            <div class="tw-w-10/12 mx-auto">
                <div class="tw-my-8">
                    <p class="tw-text-2xl text-start tw-font-semibold">Landing Page MR Yearbook</p>
                </div>
                <div>
                    <p class="tw-text-base">MR Yearbook adalah vendor yang bergerak di bidang buku tahunan dan juga selebrasi sekolah. Website ini termasuk ke kategori <b> Landing Page </b>. Terdiri dari halaman “tentang kami”, “kenapa harus memilih kami?”, dan “Visi dan Misi” .</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="tw-w-11/12 mx-auto">
    <div class="">
        <p class="md:tw-text-xl tw-text-md text-center tw-text-[#858585] tw-font-semibold" id="projek">Projek Yang Telah Dikerjakan</p>
        <p class="md:tw-text-5xl tw-text-3xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
    </div>
</div>
<div class="xl:tw-w-11/12 tw-mx-auto ">

    <div class="tw-flex-none xl:tw-flex tw-mt-10 ">

        <div class="tw-w-9/12 xl:tw-w-8/12 tw-mx-auto tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <div class="tw-w-12/12 lg:tw-w-11/12 tw-mx-auto tw-bg-[#d9d9d9] tw-rounded-md">
                <div class="tw-w-10/12 tw-mx-auto tw-py-6">
                    <img src="{{ asset("img/kalkulator-mr.png") }}" alt="" srcset="" class=" tw-w-full ">
                </div>
        </div>
        </div>

        <div class="tw-w-9/12 xl:tw-w-5/12 tw-pt-2 tw-mx-auto   ">
            <div class="tw-w-11/12 xl:tw-w-10/12 tw-mx-auto tw-text-black ">
            <h3 class="tw-text-2xl tw-font-medium xl:tw-text-2xl 2xl:tw-text-3xl tw-mt-2 xl:tw-mt-0">Kalkulator Perhitungan MR YearBook</h3>
            <p class="tw-text-md tw-mt-5 lg:tw-text-lg xl:tw-text-base 2xl:tw-text-lg tw-my-auto ">Kalkulator Perhitungan MR Yearbook ini adalah sebuah <span class="tw-font-semibold">sistem berbasis website</span> yang memudahkan agar tidak perlu melakukan perhitungan secara manual. Hanya perlu menginputkan HPP, sistem akan merinci HPP yang di input dan sistem akan menampilkan Pendapatan Kotor sesuai HPP yang di input kan.</p>
        </div>
        </div>
    </div>

    <div class="tw-flex-none xl:tw-flex tw-mt-16">

        <div class="tw-w-9/12 xl:tw-hidden tw-mx-auto tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <div class="tw-w-12/12 lg:tw-w-11/12 tw-mx-auto tw-bg-[#d9d9d9] tw-rounded-md ">
                <div class="tw-w-10/12 tw-mx-auto tw-py-6">
                    <img src="{{ asset("img/mecaStudios.png") }}" alt="" srcset="" class=" tw-w-full ">
                </div>
        </div>
        </div>

        <div class="tw-w-9/12 xl:tw-w-5/12 tw-pt-2 tw-mx-auto">
            <div class="tw-w-11/12 xl:tw-w-10/12 tw-mx-auto tw-text-black">
            <h3 class=" tw-text-2xl tw-font-medium xl:tw-text-2xl 2xl:tw-text-3xl tw-mt-2 xl:tw-mt-0">Landing Page Meca Studios</h3>
            <p class="tw-text-md tw-mt-5 lg:tw-text-lg xl:tw-text-base 2xl:tw-text-lg">Website ini termasuk ke kategori <span class="tw-font-semibold">Landing Page. </span> terdiri dari 4 halaman terdiri dari “Beranda” untuk mengenalkan vendor dan juga layanan jasa yang di berikan, juga ada halaman “Meca Team” yaitu anggota tim di vendor tersebut, selanjutnya ada halaman “Our Works” yang isinya layaknya album foto, dan juga halaman “Kontak”.</p>
        </div>
        </div>

        <div class=" tw-hidden xl:tw-block lg:tw-w-8/12 tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300 ">
            <div class="tw-w-11/12 tw-mx-auto tw-bg-[#d9d9d9] tw-rounded-md ">
                <div class="tw-w-10/12 tw-mx-auto tw-py-6">
                    <img src="{{ asset("img/mecaStudios.png") }}" alt="" srcset="" class=" tw-w-full ">
                </div>
        </div>
        </div>
    </div>

    <div class="tw-flex-none xl:tw-flex tw-mt-16 ">

        <div class="tw-w-9/12 xl:tw-w-8/12 tw-mx-auto tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300">
            <div class="tw-w-12/12 lg:tw-w-11/12 tw-mx-auto tw-bg-[#d9d9d9] tw-rounded-md">
                <div class="tw-w-10/12 tw-mx-auto tw-py-6">
                    <img src="{{ asset("img/mryearbook.png") }}" alt="" srcset="" class=" tw-w-full ">
                </div>
        </div>
        </div>

        <div class="tw-w-9/12 xl:tw-w-5/12 tw-pt-2 tw-mx-auto ">
            <div class="tw-w-11/12 xl:tw-w-10/12 tw-mx-auto tw-text-black">
            <h3 class=" tw-text-2xl tw-font-medium xl:tw-text-2xl 2xl:tw-text-3xl tw-mt-2 xl:tw-mt-0">Landing Page MR Yearbook</h3>
            <p class="tw-text-md tw-mt-5 lg:tw-text-lg xl:tw-text-base 2xl:tw-text-lg">MR Yearbook adalah vendor yang bergerak di bidang buku tahunan dan juga selebrasi sekolah. Website ini termasuk ke kategori <span class="tw-font-semibold">Landing Page.</span> Terdiri dari halaman “tentang kami”, “kenapa harus memilih kami?”, dan “Visi dan Misi”.</p>
        </div>
        </div>
    </div>
</div>
<div class=" tw-translate-y-14 tw-w-full">
    <div class="text-center">
    <button><a href="" id="bg-gradient" class="tw-text-lg tw-w-2/6 text-white tw-rounded-lg tw-py-2 tw-px-7 md:tw-px-16">Lihat Selengkapnya</a></button>
</div>
</div>
</div>

<div class="tw-w-full tw-py-20 md:tw-pt-11 md:tw-pb-20" id="list_harga">
    <div class="tw-w-11/12 mx-auto">
        <div class="">
            <p class="md:tw-text-5xl tw-text-3xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
            <p class="md:tw-text-xl tw-text-md text-center tw-text-[#858585] tw-font-semibold">Menyediakan Berbagai Macam Paket</p>
        </div>
        <div class=" tw-grid tw-grid-cols-1 tw-grid-rows-1 sm:tw-gap-x-9 md:tw-gap-0 tw-mt-12 tw-mx-auto  ">
            <div class="lg:tw-w-12/12 md:tw-w-11/12 sm:tw-col-start-2 tw-col-start-1 tw-row-start-1">
                <div class="mx-auto tw-mb-8 tw-w-9/12 sm:tw-w-11/12 md:tw-w-9/12 2xl:tw-w-10/12 xl:tw-w-11/12 lg:tw-w-6/6  tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                    <div class=" tw-p-4 2xl:tw-p-6">
                    <p class="text-center tw-text-2xl 2xl:tw-text-3xl lg:tw-text-2xl xl:tw-text-2xl md:tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                    <p class="tw-my-3 text-center tw-text-lg 2xl:tw-text-xl md:tw-text-xl xl:tw-text-lg tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="md:tw-text-4xl tw-text-4xl 2xl:tw-text-5xl xl:tw-text-3xl lg:tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 799K </span></p>
                    <p class="tw-my-3 text-center 2xl:tw-text-lg  tw-h-0 md:tw-h-20 tw-invisible md:tw-visible md:tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                    <div class="tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300 tw-mx-auto tw-mt-5 tw-rounded-lg 2xl:tw-w-4/6 2xl:tw-py-3 xl:tw-w-5/6 xl:tw-py-3 lg:tw-w-5/6 lg:tw-py-3 md:tw-w-5/6 md:tw-py-3 tw-w-6/12 tw-p-2 hover:tw-ease-out" id="bg-gradient">
                        <p class=" text-center tw-text-white tw-font-semibold 2xl:tw-text-xl tw-text-sm ">Selengkapnya</p>
                </div>
                </div>
                </div>
            </div>


            <div class="lg:tw-w-12/12 md:tw-w-11/12 sm:tw-col-start-3 sm:tw-row-start-1 tw-col-start-1 tw-row-start-2">
                <div class="mx-auto tw-mb-8 tw-w-9/12 sm:tw-w-11/12 md:tw-w-9/12 2xl:tw-w-10/12 xl:tw-w-11/12 lg:tw-w-6/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                    <div class=" tw-p-4 2xl:tw-p-6">
                    <p class="text-center tw-text-2xl 2xl:tw-text-3xl lg:tw-text-2xl xl:tw-text-2xl md:tw-text-2xl  tw-font-semibold tw-text-[#595959]">Web Portofolio</p>
                    <p class="tw-my-3 text-center tw-text-lg 2xl:tw-text-xl md:tw-text-xl xl:tw-text-lg tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="md:tw-text-4xl tw-text-4xl 2xl:tw-text-5xl xl:tw-text-3xl lg:tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 599K </span></p>
                    <p class="tw-my-3 text-center 2xl:tw-text-lg  tw-h-0 md:tw-h-20 tw-invisible md:tw-visible md:tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                    <div class="tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300 tw-mx-auto tw-mt-5 tw-rounded-lg 2xl:tw-w-4/6 2xl:tw-py-3 xl:tw-w-5/6 xl:tw-py-3 lg:tw-w-5/6 lg:tw-py-3 md:tw-w-5/6 md:tw-py-3 tw-w-6/12 tw-p-2 hover:tw-ease-out" id="bg-gradient">
                        <p class=" text-center tw-text-white tw-font-semibold 2xl:tw-text-xl tw-text-sm ">Selengkapnya</p>
                </div>
                </div>
                </div>
            </div>


            <div class="lg:tw-w-12/12 md:tw-w-11/12 xl:tw-col-start-4 xl:tw-row-start-1 sm:tw-col-start-2 sm:tw-row-start-2 tw-col-start-1 tw-row-start-3 ">
                <div class="mx-auto tw-mb-8 tw-w-9/12 md:tw-w-9/12 2xl:tw-w-10/12 xl:tw-w-11/12 lg:tw-w-6/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg sm:tw-mt-8 xl:tw-mt-0">
                    <div class=" tw-p-4 2xl:tw-p-6">
                    <p class="text-center tw-text-2xl 2xl:tw-text-3xl lg:tw-text-2xl xl:tw-text-2xl md:tw-text-2xl tw-font-semibold tw-text-[#595959]">Web Pendidikan</p>
                    <p class="tw-my-3 text-center tw-text-lg 2xl:tw-text-xl md:tw-text-xl xl:tw-text-lg tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="md:tw-text-4xl tw-text-4xl 2xl:tw-text-5xl xl:tw-text-3xl lg:tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 1.200K </span></p>
                    <p class="tw-my-3 text-center 2xl:tw-text-lg  tw-h-0 md:tw-h-20 tw-invisible md:tw-visible md:tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                    <div class="tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300 tw-mx-auto tw-mt-5 tw-rounded-lg 2xl:tw-w-4/6 2xl:tw-py-3 xl:tw-w-5/6 xl:tw-py-3 lg:tw-w-5/6 lg:tw-py-3 md:tw-w-5/6 md:tw-py-3 tw-w-6/12 tw-p-2 hover:tw-ease-out" id="bg-gradient">
                        <p class=" text-center tw-text-white tw-font-semibold 2xl:tw-text-xl tw-text-sm ">Selengkapnya</p>
                </div>
                </div>
                </div>
            </div>

            <div class="lg:tw-w-12/12 md:tw-w-11/12 xl:tw-col-start-5 xl:tw-row-start-1 sm:tw-col-start-3 sm:tw-row-start-2 tw-col-start-1 tw-row-start-4">
                <div class="mx-auto tw-mb-8 tw-w-9/12 md:tw-w-9/12 2xl:tw-w-10/12 xl:tw-w-11/12 lg:tw-w-6/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg sm:tw-mt-8 xl:tw-mt-0">
                    <div class=" tw-p-4 2xl:tw-p-6 ">
                    <p class="text-center tw-text-2xl 2xl:tw-text-3xl lg:tw-text-2xl xl:tw-text-2xl md:tw-text-xl tw-font-semibold tw-text-[#595959]">Sistem Informasi</p>
                    <p class="tw-my-3 text-center tw-text-lg 2xl:tw-text-xl md:tw-text-xl xl:tw-text-lg tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="md:tw-text-4xl tw-text-4xl 2xl:tw-text-5xl xl:tw-text-3xl lg:tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 1.500K </span></p>
                    <p class="tw-my-3 text-center 2xl:tw-text-lg  tw-h-0 md:tw-h-20 tw-invisible md:tw-visible md:tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center 2xl:tw-text-4xl tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl 2xl:tw-text-4xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                    <div class="tw-transition tw-ease-in-out tw-delay-400 hover:-tw-translate-y-1 hover:tw-scale-110 tw-duration-300 tw-mx-auto tw-mt-5 tw-rounded-lg 2xl:tw-w-4/6 2xl:tw-py-3 xl:tw-w-5/6 xl:tw-py-3 lg:tw-w-5/6 lg:tw-py-3 md:tw-w-5/6 md:tw-py-3 tw-w-6/12 tw-p-2 hover:tw-ease-out" id="bg-gradient">
                        <p class=" text-center tw-text-white tw-font-semibold 2xl:tw-text-xl tw-text-sm ">Selengkapnya</p>
                </div>
                </div>
                </div>
            </div>



        </div>


    </div>
</div>
@endsection
