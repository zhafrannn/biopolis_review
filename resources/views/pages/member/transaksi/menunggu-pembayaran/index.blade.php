@extends('layouts.auth-member')

@section('title')
Checkout Product
@endsection

@section('content')
<section class="hidden lg:block mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
    </div>

    <div class="rounded-[10px] border border-[#E5E5E5] p-[13.54px]">

        <div class="mb-[27.69px] flex items-center gap-[13.54p]">
            <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
            <p class="text-[16.93px]">Menunggu Pembayaran</p>
        </div>

        <div class="flex flex-col gap-5">
            @foreach ($user_payment as $item)
            <a href="{{ $item->redirect_url }}" target="_blank">
                {{-- start: Card --}}
                <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="mb-[13.54px] flex items-center justify-between">
                        <div class="items-ce nter flex gap-[3.39px]">
                            <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                            <p class="font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-[13px]">21 Okt 2023</p>
                        </div>

                        <div class="flex items-center gap-[13.54px]">
                            <p class="text-[13px]">Bayar Sebelum</p>
                            <p class="text-[13px]">{{ $item->valid_until }}</p>
                        </div>
                    </div>

                    <div class="flex items-end justify-between">
                        <div class="flex items-center gap-[40px]">
                            <div class="flex items-center gap-[13.54px]">

                                <div>
                                    <h3 class="text-[17px]">Metode Pembayaran</h3>
                                    <h3 class="text-[17px] font-semibold">BCA Virtual Account</h3>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-[17px]">Nomor Virtual Account</h3>
                                <h3 class="text-[17px] font-semibold">8019238495049382</h3>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-[13.54px]">Total Belanja</h3>
                            <h3 class="text-[13.54px] font-semibold">Rp{{ $item->total_payment }}</h3>
                        </div>
                    </div>
                </div>
                {{-- end: Card --}}
            </a>
            @endforeach
        </div>
    </div>


</section>

<!-- mobile -->
<section class="lg:hidden mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
    </div>

    <div class="rounded-[10px] border border-[#E5E5E5] p-[13.54px]">

        <div class="mb-[27.69px] flex items-center gap-[13.54p]">
            <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
            <p class="text-[16.93px]">Menunggu Pembayaran</p>
        </div>

        <div class="flex flex-col gap-5">
            @foreach ($user_payment as $item)
            <a href="{{ $item->redirect_url }}" target="_blank">
                {{-- start: Card --}}
                <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="mb-[13.54px] flex justify-between items-start">
                        <div class="items-center flex gap-[3.39px]">
                            <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                            <div class="">
                                <p class="font-semibold text-[13px]">{{ Auth::user()->name }}</p>
                                <p class="text-[13px]">21 Okt 2023</p>
                            </div>
                        </div>

                        <div class="text-end gap-[13.54px]">
                            <p class="text-[10px]">Bayar Sebelum</p>
                            <p class="text-[10px]">{{ $item->valid_until }}</p>
                        </div>
                    </div>

                    <div class="">
                        <div class=" gap-[40px]">
                            <div class="gap-[13.54px]">

                                <div>
                                    <!-- <h3 class="text-[12px]">Metode Pembayaran</h3> -->
                                    <h3 class="text-[12px] font-semibold">BCA Virtual Account</h3>
                                </div>
                            </div>
                            <div>
                                <!-- <h3 class="text-[12px]">Nomor Virtual Account</h3> -->
                                <h3 class="text-[12px] font-semibold">8019238495049382</h3>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-[11px]">Total Belanja</h3>
                            <h3 class="text-[11px] font-semibold">Rp{{ $item->total_payment }}</h3>
                        </div>
                    </div>
                </div>
                {{-- end: Card --}}
            </a>
            @endforeach
        </div>
    </div>


</section>
<!-- end mobile -->
@endsection