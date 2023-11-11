@extends('layouts.auth-member')

@section('title')
    Saldo
@endsection

@section('content')
    <div class="z-10 flex justify-around p-5">
        <div class="h--[490px] card-compact card w-[254px] bg-base-100 shadow-md">
            <figure><img class="h-[254px] w-[254px] bg-[#D9D9D9]" src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                    alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Paket Biopolis</h2>
                <p class="text-[16px] text-primary">+50 poin</p>
                <p class="mt-2 text-[20px] font-semibold text-[#0A0A0B]">Rp.2000.0000</p>
                <div class="flex">
                    <span class="text-[16px] text-[#969EBA] line-through">Rp.2000.0000</span>
                    <span class="ml-1 text-[16px] text-[#E30613]">5%</span>
                </div>

                <div class="card-actions mt-4 items-center justify-center">
                    <a href="{{ url('/checkout') }}" class="text btn btn-primary w-[100%]">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="card-compact h--[490px] card w-[254px] bg-base-100 shadow-md">
            <figure><img class="h-[254px] w-[254px] bg-[#D9D9D9]" src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                    alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Paket Biopolis</h2>
                <p class="text-[16px] text-primary">+50 poin</p>
                <p class="mt-2 text-[20px] font-semibold text-[#0A0A0B]">Rp.2000.0000</p>
                <div class="flex">
                    <span class="text-[16px] text-[#969EBA] line-through">Rp.2000.0000</span>
                    <span class="ml-1 text-[16px] text-[#E30613]">5%</span>
                </div>

                <div class="card-actions mt-4 items-center justify-center">
                    <a href="{{ url('/checkout') }}" class="text btn btn-primary w-[100%]">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="card-compact h--[490px] card w-[254px] bg-base-100 shadow-md">
            <figure><img class="h-[254px] w-[254px] bg-[#D9D9D9]" src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                    alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Paket Biopolis</h2>
                <p class="text-[16px] text-primary">+50 poin</p>
                <p class="mt-2 text-[20px] font-semibold text-[#0A0A0B]">Rp.2000.0000</p>
                <div class="flex">
                    <span class="text-[16px] text-[#969EBA] line-through">Rp.2000.0000</span>
                    <span class="ml-1 text-[16px] text-[#E30613]">5%</span>
                </div>

                <div class="card-actions mt-4 items-center justify-center">
                    <a href="{{ url('/checkout') }}" class="text btn btn-primary w-[100%]">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="card-compact h--[490px] card w-[254px] bg-base-100 shadow-md">
            <figure><img class="h-[254px] w-[254px] bg-[#D9D9D9]" src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                    alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Paket Biopolis</h2>
                <p class="text-[16px] text-primary">+50 poin</p>
                <p class="mt-2 text-[20px] font-semibold text-[#0A0A0B]">Rp.2000.0000</p>
                <div class="flex">
                    <span class="text-[16px] text-[#969EBA] line-through">Rp.2000.0000</span>
                    <span class="ml-1 text-[16px] text-[#E30613]">5%</span>
                </div>

                <div class="card-actions mt-4 items-center justify-center">
                    <a href="{{ url('/checkout') }}" class="text btn btn-primary w-[100%]">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
