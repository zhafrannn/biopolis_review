@extends('layouts.auth-member')

@section('title')
Point
@endsection

@section('content')
<div class="flex justify-end">
    <button class="btn btn-circle btn-outline">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
<h2 class="mb-[19.95px] text-[27.09px] font-semibold">Notifikasi</h2>
<div class="rounded-2xl border border-[#E5E5E5] w-[100%] " style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
    <!-- <div class="flex">
        <button class="py-4 px-8 text-[20px] text-primary font-semibold">Semua</button>
        <button class="py-4 px-8 text-[20px] text-[#0A0A0B] font-semibold">Transaksi</button>
        <button class="py-4 px-8 text-[20px] text-[#0A0A0B] font-semibold">Referral</button>
        <button class="py-4 px-8 text-[20px] text-[#0A0A0B] font-semibold">Info</button>
    </div> -->
    <a href="">
        <div class="h-[151px] bg-[#F2FFF5] w-[100%] px-8 py-8">
            <div class="flex items-center gap-1 mb-4">
                <img src="{{ asset('images/icons/bag-2.svg') }}" alt="">
                <p class="text-[16px] text-[#969EBA]">Belanja</p>
                <img src="{{ asset('images/icons/ellipse-8.svg') }}" alt="" class="px-2">
                <p class="text-[16px] text-[#969EBA]">23 Okt 2023</p>
            </div>
            <div>
                <p class="text-[20px] text-[#0A0A0B] font-semibold">Pesananmu belum dibayar</p>
                <p class="text-[20px] text-[#969EBA]    ">Ayo bayar dan selesaikan pesananmu!</p>
                <p></p>
            </div>
        </div>
    </a>
    <a href="">
        <div class="h-[151px] bg-white w-[100%] px-8 py-8">
            <div class="flex items-center gap-1 mb-4">
                <img src="{{ asset('images/icons/info-circle.svg') }}" alt="">
                <p class="text-[16px] text-[#969EBA]">Belanja</p>
                <img src="{{ asset('images/icons/ellipse-8.svg') }}" alt="" class="px-2">
                <p class="text-[16px] text-[#969EBA]">23 Okt 2023</p>
            </div>
            <div>
                <p class="text-[20px] text-[#0A0A0B] font-semibold">Pesananmu belum dibayar</p>
                <p class="text-[20px] text-[#969EBA]    ">Ayo bayar dan selesaikan pesananmu!</p>
                <p></p>
            </div>
        </div>
    </a>
    <a href="">
        <div class="h-[151px] bg-[#F2FFF5] w-[100%] px-8 py-8">
            <div class="flex items-center gap-1 mb-4">
                <img src="{{ asset('images/icons/bag-2.svg') }}" alt="">
                <p class="text-[16px] text-[#969EBA]">Belanja</p>
                <img src="{{ asset('images/icons/ellipse-8.svg') }}" alt="" class="px-2">
                <p class="text-[16px] text-[#969EBA]">23 Okt 2023</p>
            </div>
            <div>
                <p class="text-[20px] text-[#0A0A0B] font-semibold">Pesananmu belum dibayar</p>
                <p class="text-[20px] text-[#969EBA]    ">Ayo bayar dan selesaikan pesananmu!</p>
                <p></p>
            </div>
        </div>
    </a>

</div>

@endsection