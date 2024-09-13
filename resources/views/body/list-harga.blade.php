@extends('layout.layout')
@include('navbar.navbar')
@section('isi-konten')
<section>
    {{-- paket web pendidikan --}}
        <div class="tw-w-full  tw-bg-[#F3F3F3]  ">
            <div class="tw-w-11/12 tw-mx-auto tw-py-14">
            <nav class="">
                <p class="tw-font-semibold tw-text-center sm:tw-text-lg md:tw-text-xl lg:tw-text-2xl 2xl:tw-text-4xl">Paket Website Pendidikan</p>
            </nav>

            {{-- list harga paket website pendidikan--}}
            <div class=" md:tw-flex-none md:tw-gap-y-3 lg:tw-flex-none tw-flex tw-mt-8 md:tw-grid md:tw-overflow-hidden md:tw-snap-none tw-snap-x tw-gap-3 md:tw-gap-0 tw-snap-mandatory tw-overflow-scroll">

            <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                <div class="md:tw-flex">
                    <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                        <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                    </div>
                    <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                        <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                        <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                        {{-- harga hidden --}}
                        <div class="md:tw-hidden text-center tw-mt-3">
                            <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                        </div>
                        <div class="tw-mt-4 md:tw-hidden">
                        <small class="">fitur yang di dapat : </small>
                    </div>
                        {{--  --}}
                        <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                            <div class="tw-w-6/12 ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                            </div>
                            <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                </p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                            </div>
                        </div>
                    </div>
                    <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                        <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                        <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                    </div>
                    <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                    <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                </div>
                </div>
            </div>


            <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                <div class="md:tw-flex">
                    <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                        <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                    </div>
                    <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                        <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                        <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                        {{-- harga hidden --}}
                        <div class="md:tw-hidden text-center tw-mt-3">
                            <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                        </div>
                        <div class="tw-mt-4 md:tw-hidden">
                        <small class="">fitur yang di dapat : </small>
                    </div>
                        {{--  --}}
                        <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                            <div class="tw-w-6/12 ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                            </div>
                            <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                </p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                            </div>
                        </div>
                    </div>
                    <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                        <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                        <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                    </div>
                    <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                    <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                </div>
                </div>
            </div>



            <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                <div class="md:tw-flex">
                    <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                        <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                    </div>
                    <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                        <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                        <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                        {{-- harga hidden --}}
                        <div class="md:tw-hidden text-center tw-mt-3">
                            <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                        </div>
                        <div class="tw-mt-4 md:tw-hidden">
                        <small class="">fitur yang di dapat : </small>
                    </div>
                        {{--  --}}
                        <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                            <div class="tw-w-6/12 ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                            </div>
                            <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                </p>
                                <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                            </div>
                        </div>
                    </div>
                    <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                        <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                        <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                    </div>
                    <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                    <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                </div>
                </div>
            </div>



        </div>

        </div>
        </div>
        {{-- batas paket pendidikan --}}


        {{-- paket landing page --}}
        <div class="tw-w-full  tw-bg-[#F3F3F3]  ">
            <div class="tw-w-11/12 tw-mx-auto tw-py-14">
            <nav class="">
                <p class="tw-font-semibold tw-text-center sm:tw-text-lg md:tw-text-xl lg:tw-text-2xl 2xl:tw-text-4xl">Paket Website Pendidikan</p>
            </nav>

            {{-- list harga paket website pendidikan--}}
            <div class=" md:tw-flex-none md:tw-gap-y-3 lg:tw-flex-none tw-flex tw-mt-8 md:tw-grid md:tw-overflow-hidden md:tw-snap-none tw-snap-x tw-gap-3 md:tw-gap-0 tw-snap-mandatory tw-overflow-scroll">

                <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                    <div class="md:tw-flex">
                        <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                            <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                        </div>
                        <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                            <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                            <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                            {{-- harga hidden --}}
                            <div class="md:tw-hidden text-center tw-mt-3">
                                <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                            </div>
                            <div class="tw-mt-4 md:tw-hidden">
                            <small class="">fitur yang di dapat : </small>
                        </div>
                            {{--  --}}
                            <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                                <div class="tw-w-6/12 ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                                </div>
                                <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                    </p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                                </div>
                            </div>
                        </div>
                        <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                            <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                            <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                        </div>
                        <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                        <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                    </div>
                    </div>
                </div>


                <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                    <div class="md:tw-flex">
                        <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                            <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                        </div>
                        <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                            <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                            <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                            {{-- harga hidden --}}
                            <div class="md:tw-hidden text-center tw-mt-3">
                                <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                            </div>
                            <div class="tw-mt-4 md:tw-hidden">
                            <small class="">fitur yang di dapat : </small>
                        </div>
                            {{--  --}}
                            <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                                <div class="tw-w-6/12 ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                                </div>
                                <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                    </p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                                </div>
                            </div>
                        </div>
                        <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                            <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                            <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                        </div>
                        <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                        <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                    </div>
                    </div>
                </div>



                <div class="tw-snap-center md:tw-snap-none tw-shrink-0 tw-w-11/12 tw-bg-[#FBFBFB] tw-rounded-sm mx-auto tw-shadow-md tw-py-4">
                    <div class="md:tw-flex">
                        <div class="tw-w-5/12 md:tw-w-4/12 tw-mx-auto">
                            <img src="{{ asset("img/vectorwebpendidikan.png") }}" alt="" srcset="" class="tw-w-full md:tw-w-fit">
                        </div>
                        <div class="tw-w-10/12 md:tw-w-8/12 tw-mx-auto tw-mt-2 ">
                            <p class="tw-text-lg tw-font-semibold tw-text-center md:tw-text-start xl:tw-text-2xl 2xl:tw-text-3xl">Paket Lorem</p>
                            <p class="tw-text-sm tw-text-center md:tw-text-start 2xl:tw-text-lg">Digitalisasi Pendidikan</p>
                            {{-- harga hidden --}}
                            <div class="md:tw-hidden text-center tw-mt-3">
                                <p class="tw-font-semibold tw-text-[#595959] tw-text-4xl">Rp.<spanc class="gradient-font">799K</span></p>
                            </div>
                            <div class="tw-mt-4 md:tw-hidden">
                            <small class="">fitur yang di dapat : </small>
                        </div>
                            {{--  --}}
                            <div class="tw-my-4 md:tw-my-2 lg:tw-py-5 xl:tw-pt-10 tw-flex">
                                <div class="tw-w-6/12 ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Free hosting 1 tahun</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Domain gratis (.com)</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Desain kumaha maneh</p>
                                </div>
                                <div class="tw-w-5/12 lg:tw-w-6/12 tw-mx-auto ">
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">Revisi sampe mampus</p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl">naon deui ieu isini
                                    </p>
                                    <p class=" tw-font-semibold tw-text-sm lg:tw-text-base xl:tw-text-xl xl:tw-font-medium 2xl:tw-text-xl"><s>Israel</s></p>
                                </div>
                            </div>
                        </div>
                        <div class="md:tw-w-4/12 tw-invisible md:tw-visible md:tw-h-12 lg:tw-pt-10 md:tw-pt-5 xl:tw-pt-16 ">
                            <p class="md:tw-text-2xl  2xl:tw-text-4xl xl:tw-text-3xl md:tw-my-6 tw-text-[#595959] text-center tw-font-semibold lg:tw-text-3xl">Rp.<span class="gradient-font"> 799K </span></p>
                            <p class="md:tw-text-center lg:tw-text-base md:tw-text-white tw-text-sm"><a href="" class="tw-rounded-md tw-py-2 md:tw-px-3 hover:tw-animate-pulse" id="bg-gradient">Ambil Paket</a></p>
                        </div>
                        <div class="tw-mt-4 tw-w-12/12 text-center tw-mb-6 md:tw-hidden">
                        <a href="" class="tw-w-4/12 tw-text-white tw-py-3 2xl:tw-text-xl                                                                                                                                                                                                                                                                                                                                     tw-px-12 tw-rounded-md " id="bg-gradient">Ambil Paket</a>
                    </div>
                    </div>
                </div>



        </div>

        </div>
        </div>
        {{-- akhir paket landing page --}}

</section>
@endsection
