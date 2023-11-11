@extends('layouts.member-profile')

@section('title')
Profile
@endsection

@section('content')
<p class="text-[32px] text-[#0A0A0B] font-semibold">Profil Pengguna </p>
<div class="flex items-center justify-center flex-col rounded-2xl w-[100%] px-[24px] py-[24px] mt-7" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
    <img src="{{ asset('images/icons/ellipse-4.svg') }}" alt="profile" class="mb-8 w-[112px]">
    <p class="text-[24px] text-[#0A0A0B] font-semibold">Faris Ku</p>
    <p class="text-[16px] text-[#0A0A0B] mb-[24px]">+62 858 0536 8655</p>

</div>
<div class="flex justify-between flex-col rounded-2xl w-[100%] px-[24px] py-[24px] mt-8 gap-8" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
    <p class="text-[24px] text-[#0A0A0B] font-semibold ">Informasi Umum</p>
    <div class="flex justify-between ">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#969EBA] font-semibold">Nama Lengkap</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
        </div>
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#969EBA] font-semibold">NIK</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="1234567890132456">
        </div>
    </div>
    <div class="flex justify-between">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#969EBA] font-semibold">Nomor HP</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="080808080808">
        </div>
    </div>

    <p class="text-[24px] text-[#0A0A0B] font-semibold mt-8 ">Informasi Akun</p>
    <div class="flex justify-between ">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#969EBA] font-semibold">Email</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="farisku@gmail.com">
        </div>
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#969EBA] font-semibold">Password</label>
            <input type="password" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="12345678">
        </div>
    </div>

    <button class="btn btn-primary w-[100%] font-semibold text-[20px]">Simpan</button>
</div>

@endsection