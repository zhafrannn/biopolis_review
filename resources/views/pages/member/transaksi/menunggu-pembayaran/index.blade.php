@extends('layouts.auth-member')

@section('title')
    Checkout Product
@endsection

@section('content')
    <section class="mb-[27.92px] text-[#0A0A0B]">

        <div class="mb-[28px]">
            <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
        </div>

        <div class="rounded-[10px] border border-[#E5E5E5] p-[13.54px]">

            <div class="mb-[27.69px] flex items-center gap-[13.54p]">
                <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
                <p class="text-[16.93px]">Menunggu Pembayaran</p>
            </div>
            {{-- start: Card --}}
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="mb-[13.54px] flex items-center justify-between">
                    <div class="items-ce nter flex gap-[3.39px]">
                        <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                        <p class="font-semibold">Farisku</p>
                        <p class="text-[13px]">21 Okt 2023</p>
                    </div>

                    <div class="flex items-center gap-[13.54px]">
                        <p class="text-[13px]">Bayar Sebelum</p>
                        <p class="text-[13px]">26 Okt 2023</p>
                    </div>
                </div>

                <div class="flex items-end justify-between">
                    <div class="flex items-center gap-[40px]">
                        <div class="flex items-center gap-[13.54px]">
                            <img src="{{ asset('images/icons/bank-sample.svg') }}" alt="">
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
                        <h3 class="text-[13.54px] font-semibold">Rp.2.000.000</h3>
                    </div>
                </div>
            </div>
            {{-- end: Card --}}
        </div>


    </section>
@endsection
