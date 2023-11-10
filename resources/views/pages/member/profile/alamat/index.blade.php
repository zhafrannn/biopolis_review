@extends('layouts.member-profile')

@section('title')
Profile
@endsection

@section('content')
<p class="text-[32px] text-[#0A0A0B] font-semibold">Daftar Alamat Pengiriman</p>
<div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-7 gap-6">
    <button class="btn btn-primary font-semibold text-[20px] text-white py-4 px-6 rounded-xl w-[312px]">Tambah Alamat Baru</button>
    <div class="flex justify-between flex-col rounded-2xl border border-primary bg-[#F2FFF5] w-[100%] h-[236px] px-[24px] py-[24px]">
        <div class="flex justify-between items-center">
            <div class="flex flex-col w-[806px] gap-6">
                <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                <div>
                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                    <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                    <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                </div>
                <div class="gap-6 pt-4">
                    <a href="" class="text-[16px] font-semibold text-primary mr-6">Ubah Alamat</a>
                    <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat Alamat</a>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary font-semibold text-[12px] text-white py-4 px-6 rounded-xl w-fit">Pilih</button>
            </div>
        </div>
    </div>
    <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] h-[236px] px-[24px] py-[24px]">
        <div class="flex justify-between items-center">
            <div class="flex flex-col w-[806px] gap-6">
                <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                <div>
                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                    <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                    <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                </div>
                <div class="gap-6 pt-4">
                    <a href="" class="text-[16px] font-semibold text-primary mr-6">Ubah Alamat</a>
                    <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat Alamat</a>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary font-semibold text-[12px] text-white py-4 px-6 rounded-xl w-fit">Pilih</button>
            </div>
        </div>
    </div>
</div>


@endsection