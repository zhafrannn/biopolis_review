@extends('layouts.auth-member')

@section('title')
Saldo
@endsection

@section('content')
<div class="p-5">
    <h1 class="ml-3 text-[32px] font-semibold mb-[26px]">Checkout</h1>
    <div class="flex items-start">
        <div class="w-8/12 rounded-2xl bg-white p-[24px] shadow-md m-3 gap-6">
            <p class="text-[20px] text-[#0A0A0B] font-semibold mb-6">Alamat Pengiriman</p>
            <p class="text-[20px]text-[#0A0A0B] font-semibold">Faris Ku</p>
            <p class="text-[20px] text-[#969EBA]">+62 858 0536 8655</p>
            <p class="text-[20px] text-[#969EBA]">Alamat Lengkap Penerima</p>
            <div class="w-[100%] h-[1px] border mt-6 mb-6"></div>
            <button class="btn btn-primary w-[231px]">Pilih Alamat Lain</button>
            <div class="w-[100%] h-[1px] border-[3px] mt-6 mb-6"></div>
            <p class="text-[20px] text-[#0A0A0B] font-semibold">Biopolis</p>
            <p class="text-[14px] text-[#0A0A0B]">Kota Bandung</p>
            <div class="flex justify-between items-start mt-6">
                <div class="flex">
                    <img src="" alt="gambar-produk" class="w-[121px] h-[121px] bg-[#D9D9D9] rounded-[5px]">
                    <div class="flex flex-col justify-around ml-4">
                        <p class="text-[20px] text-[#0A0A0B] font-semibold">Paket Biopolis</p>
                        <div>
                            <span class="text-[16px] text-[#969EBA] line-through">Rp4.000.0000</span>
                            <span class="text-[16px] text-[#20B15A]">Rp4.000.0000</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end justify-between ">
                    <p class="text-[20px] text-[#0A0A0B] font-semibold mb-2">Tipe Pemesanan</p>
                    <div class="flex gap-6">
                        <button class="btn rounded-xl border-[20B15A] bg-[#D6FFDE] gap-2 p-[8px_24px] text-primary">Dikirim</button>
                        <button class="btn rounded-xl border-[969EBA] gap-2 p-[8px_24px] text-[#969EBA] bg-white">Dikirim</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/12 rounded-2xl bg-white p-[20.32px] shadow-md m-3">
            <p class="text-[16px] text-[#0A0A0B] font-semibold">Ringkasan Belanja</p>
            <div class="flex justify-between mt-8">
                <p class="text-[16px] text-[#0A0A0B]">Total Belanja</p>
                <p class="text-[16px] text-[#0A0A0B]">Rp2.000.000</p>
            </div>
            <div class="flex justify-between">
                <p class="text-[16px] text-[#0A0A0B]">Total Ongkir</p>
                <p class="text-[16px] text-[#0A0A0B]">Rp2.000.000</p>
            </div>
            <div class="w-[100%] h-[1px] border mt-6 mb-6"></div>
            <div class="flex justify-between">
                <p class="text-[16px] text-[#0A0A0B] font-semibold">Total Pembayaran</p>
                <p class="text-[16px] text-[#0A0A0B] font-semibold">Rp2.000.000</p>
            </div>
            <button class="btn btn-primary w-[100%] mt-6">Pilih Pembayaran</button>
        </div>
    </div>

</div>
@endsection