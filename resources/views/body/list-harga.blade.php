@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
<section>
        <div class="tw-w-full  tw-bg-[#F3F3F3]  ">
            <div class="tw-w-11/12 tw-mx-auto tw-py-10">
            <nav class="">
                <p class="tw-font-semibold tw-text-center sm:tw-text-lg md:tw-text-xl lg:tw-text-2xl 2xl:tw-text-4xl">Paket Website Pendidikan</p>
            </nav>

            {{-- list harga paket website pendidikan--}}
            <div class=" md:tw-flex-none lg:tw-flex-none tw-flex tw-mt-8 md:tw-grid md:tw-overflow-hidden md:tw-snap-none tw-snap-x tw-gap-3 md:tw-gap-0 tw-snap-mandatory tw-overflow-scroll">

            <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                <div class="md:tw-flex">
                    <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                        <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                    </div>
                    <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 border">
                        <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start">Paket Lorem</p>
                        <p class="tw-text-sm tw-text-center md:tw-text-start">Digitalisasi Pendidikan</p>
                        {{-- harga hidden --}}
                        <div class="md:tw-hidden text-center tw-mt-3">
                            <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                        </div>
                        <small class="md:tw-hidden">fitur yang di dapat : </small>
                        {{--  --}}
                        <div class="tw-my-6 md:tw-my-3 tw-flex">
                            <div class="tw-w-6/12 ">
                                <p class=" tw-font-semibold">Hosting gratis selama 1 tahun</p>
                                <p class=" tw-font-semibold">Domain gratis selama 1 tahun</p>
                                <p class=" tw-font-semibold">Desain Kostumisasi</p>
                            </div>
                            <div class="tw-w-5/12 tw-mx-auto ">
                                <p class=" tw-font-semibold">Revisi sampe mampus</p>
                                <p class=" tw-font-semibold">naon deui ieu isini
                                </p>
                                <p class=" tw-font-semibold"><s>Israel</s></p>
                            </div>
                        </div>
                    </div>
                    <div class="md:tw-w-3/12 tw-invisible md:tw-visible  border">
                        <a href="" class="tw-m-auto border">kuy</a>
                    </div>
                    <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                    <a href="" class="tw-w-4/12 border tw-text-white tw-py-3 tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                </div>
                </div>
            </div>


        </div>

        </div>
        </div>
</section>
@endsection
