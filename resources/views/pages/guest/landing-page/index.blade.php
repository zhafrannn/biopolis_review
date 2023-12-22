@extends('layouts.guest')

@section('content')
<section class="flex w-full flex-col items-center px-[20px]  text-center lg:flex-row lg:justify-between lg:px-[120px] lg:text-left" id="tentang-kami-section">
    <div class="lg:flex pt-1 lg:pt-16">
        <div class="p-[22px] lg:w-1/2">
            <h1 class="text-[30px] font-bold lg:mb-[10px] lg:text-[50px] lg:leading-[65px]">
                Parfume Ahad Teman Wewangian Keseharian Kamu</h1>
            <p class="text-[14px] lg:mb-[37px] lg:text-[21px] lg:leading-[30px]">
                Aroma Tak Tergantikan, Kesempurnaan Dalam Setiap Semprotan
            </p>
            <a href="{{ route('login') }}" class="hidden justify-center bg-primary text-white lg:flex lg:w-[210px] lg:rounded-[16px] lg:px-[30px] lg:py-[20px]">Beli
                Sekarang</a>

        </div>
        <div class="flex flex-col items-center justify-end lg:w-1/2">
            <img src="{{ asset('images/parfume-gambar.png') }}" alt="" class="w-[330px] lg:w-[500px]">
            <!-- button Mobile -->
            <div class="flex gap-5">
                <a href="{{ route('register') }}" class="my-6 flex justify-center rounded-[6.408px] bg-primary p-[15px_16px] text-center text-[14px] text-white lg:hidden">Beli Sekarang</a>
            </div>
            <!-- end button mobile -->
        </div>
    </div>
</section>
@endsection