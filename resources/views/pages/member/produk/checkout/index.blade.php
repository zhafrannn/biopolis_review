@extends('layouts.auth-member')

@section('title')
Saldo
@endsection

@section('content')
<section>
    <div class="p-5 z-[999]">
        <h1 class="mb-[26px] ml-3 text-[32px] font-semibold">Checkout</h1>
        <div class="flex items-start">
            <div class="m-3 w-8/12 gap-6 rounded-2xl bg-white p-[24px] shadow-md">
                <p class="mb-6 text-[20px] font-semibold text-[#0A0A0B]">Alamat Pengiriman</p>
                <p class="text-[20px]text-[#0A0A0B] font-semibold">{{ Auth::user()->name }}</p>
                <p class="text-[20px] text-[#969EBA]">{{ Auth::user()->user_biodata->no_whatsapp }}</p>
                <p class="text-[20px] text-[#969EBA]">Alamat Lengkap Penerima</p>
                <div class="mb-6 mt-6 h-[1px] w-[100%] border"></div>
                <!-- <button class="btn btn-primary w-[231px]">Pilih Alamat Lain</button> -->
                <div class="mb-6 mt-6 h-[1px] w-[100%] border-[3px]"></div>
                <p class="text-[20px] font-semibold text-[#0A0A0B]">Biopolis</p>
                <p class="text-[14px] text-[#0A0A0B]">Kota Bandung</p>
                <div class="mt-6 flex items-start justify-between">
                    <div class="flex">
                        <img src="" alt="gambar-produk" class="h-[121px] w-[121px] rounded-[5px] bg-[#D9D9D9]">
                        <div class="ml-4 flex flex-col justify-around">
                            <p class="text-[20px] font-semibold text-[#0A0A0B]">Paket Biopolis</p>
                            <div>
                                <span class="text-[16px] text-[#969EBA] line-through">Rp4.000.0000</span>
                                <span class="text-[16px] text-[#20B15A]">Rp4.000.0000</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-between">
                        <p class="mb-2 text-[20px] font-semibold text-[#0A0A0B]">Tipe Pemesanan</p>
                        <div class="flex gap-6">
                            <button class="btn gap-2 rounded-xl border-[20B15A] bg-[#D6FFDE] p-[8px_24px] text-primary">Dikirim</button>
                            <button class="btn gap-2 rounded-xl border-[969EBA] bg-white p-[8px_24px] text-[#969EBA]">Dikirim</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-3 w-4/12 rounded-2xl bg-white p-[20.32px] shadow-md">
                <p class="text-[16px] font-semibold text-[#0A0A0B]">Ringkasan Belanja</p>
                <div class="mt-8 flex justify-between">
                    <p class="text-[16px] text-[#0A0A0B]">Total Belanja</p>
                    <p class="text-[16px] text-[#0A0A0B]">Rp2.000.000</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-[16px] text-[#0A0A0B]">Total Ongkir</p>
                    <p class="text-[16px] text-[#0A0A0B]">Rp2.000.000</p>
                </div>
                <div class="mb-6 mt-6 h-[1px] w-[100%] border"></div>
                <div class="flex justify-between">
                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Total Pembayaran</p>
                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Rp2.000.000</p>
                </div>
                <button class="btn btn-primary mt-6 w-[100%]">Pilih Pembayaran</button>
            </div>
        </div>

    </div>
</section>
@endsection