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


    <div class="tw-w-full tw-py-9">
        <div class="tw-w-11/12">
            <div class="">
                <p class="tw-text-xl text-center tw-text-[#858585] tw-font-semibold">Keunggulan Yang Dimiliki</p>
                <p class="tw-text-5xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
            </div>
        </div>
            <div class="row tw-w-11/12 mx-auto tw-mt-24  tw-bg-white mx-auto tw-rounded-xl tw-shadow-lg">
                <div class="tw-w-3/12 tw-border">
                    <div class="tw-w-5/6">
a
                    </div>
                </div>
                <div class="tw-w-3/12 tw-border">A</div>
                <div class="tw-w-3/12 tw-border">A</div>
                <div class="tw-w-3/12 tw-border">A</div>
            </div>
        </div>
{{-- uji --}}
<div class="tw-w-full tw-py-9  tw-bg-[#F3F3F3] ">
    <div class="tw-w-11/12">
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
                <div class="tw-my-8">
                    <p class="tw-text-4xl text-start tw-font-semibold">Kalkulator Perhitungan MR Yearbook</p>
                </div>
                <div>
                    <p class="tw-text-xl">Kalkulator Perhitungan MR Yearbook ini adalah sebuah <b> sistem </b>berbasis website yang memudahkan agar tidak perlu melakukan perhitungan secara manual. Hanya perlu menginputkan HPP, sistem akan merinci HPP yang di input dan sistem akan menampilkan <b> Pendapatan Kotor</b> sesuai HPP yang di input kan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row tw-w-11/12 tw-py-28 mx-auto">
        <div class="tw-w-4/12">
            <div class="tw-w-10/12 mx-auto">
                <div class="tw-my-8">
                    <p class="tw-text-4xl text-start tw-font-semibold">Landing Page Mecca Studios</p>
                </div>
                <div>
                    <p class="tw-text-xl">Website ini termasuk ke kategori <b> Landing Page</b>. terdiri dari 4 halaman terdiri dari “Beranda” untuk mengenalkan vendor dan juga layanan jasa yang di berikan, juga ada halaman “Meca Team” yaitu anggota tim di vendor tersebut, selanjutnya ada halaman “Our Works” yang isinya layaknya album foto, dan juga halaman “Kontak”.</p>
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
                    <p class="tw-text-4xl text-start tw-font-semibold">Landing Page MR Yearbook</p>
                </div>
                <div>
                    <p class="tw-text-xl">MR Yearbook adalah vendor yang bergerak di bidang buku tahunan dan juga selebrasi sekolah. Website ini termasuk ke kategori <b> Landing Page </b>. Terdiri dari halaman “tentang kami”, “kenapa harus memilih kami?”, dan “Visi dan Misi” .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" tw-translate-y-14 tw-w-full">
    <div class="text-center">
    <button><a href="" id="bg-gradient" class="tw-text-2xl tw-w-5/6 text-white tw-rounded-lg tw-py-2 tw-px-28">Lihat Selengkapnya</a></button>
</div>
</div>
</div>

<div class="tw-w-full tw-py-28">
    <div class="tw-w-11/12 mx-auto">
        <div class="">
            <p class="tw-text-5xl text-center tw-mt-2 tw-font-semibold"><span class="gradient-font ">Jiwa Code</span></p>
            <p class="tw-text-xl text-center tw-text-[#858585] tw-font-semibold">Menyediakan Berbagai Macam Paket</p>
        </div>
        <div class="row tw-mt-11">
            <div class="tw-w-4/12">
                <div class="mx-auto tw-w-4/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                    <div class=" tw-p-4">
                    <p class="text-center tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 399K </span></p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                </div>
                </div>
            </div>


            <div class="tw-w-4/12 ">
                <div class="mx-auto tw-w-4/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                    <div class=" tw-p-4">
                    <p class="text-center tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 399K </span></p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                </div>
                </div>
            </div>


            <div class="tw-w-4/12 ">
                <div class="mx-auto tw-w-4/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                    <div class=" tw-p-4">
                    <p class="text-center tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                    <p class="tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 399K </span></p>
                    <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                </div>
                    <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                        <div class="tw-w-full text-center">
                        <div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                        </div>
                        <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                    </div>
                </div>
                </div>
            </div>


        </div>

        <div class="tw-w-full tw-mt-12">
            <div class="tw-w-8/12 mx-auto ">
                <div class="row">
                    <div class="tw-w-6/12 mx-auto ">
                        <div class="mx-auto tw-w-4/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                            <div class=" tw-p-4">
                            <p class="text-center tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                            <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                            <p class="tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 399K </span></p>
                            <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                        </div>
                            <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <div class="tw-w-full text-center">
                                <div>
                                <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                                </div>
                                <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="tw-w-6/12 mx-auto">
                        <div class="mx-auto tw-w-4/6 tw-bg-[#F2F2F2] tw-rounded-lg tw-shadow-lg">
                            <div class=" tw-p-4">
                            <p class="text-center tw-text-2xl tw-font-semibold tw-text-[#595959]">Landing Page</p>
                            <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Mulai dari</p>
                            <p class="tw-text-4xl tw-my-6 tw-text-[#595959] text-center tw-font-semibold">Rp.<span class="gradient-font"> 399K </span></p>
                            <p class="tw-my-3 text-center tw-text-sm tw-font-semibold tw-text-[#A7A7A7]">Nikmati layanan dengan harga murah beserta fitur yang tersedia</p>
                        </div>
                            <div class="tw-w-full tw-bg-[#D9D9D9] tw-rounded-b-lg tw-py-5">
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <p class="text-center tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</p>
                                <div class="tw-w-full text-center">
                                <div>
                                <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                                </div>
                                <s class=" tw-text-xl tw-font-semibold tw-text-[#12303F]">Lorem</s>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
