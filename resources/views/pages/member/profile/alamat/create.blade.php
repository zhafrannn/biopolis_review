@extends('layouts.member-profile')

@section('title')
Profile
@endsection

@section('content')
<p class="text-[32px] text-[#0A0A0B] font-semibold">Tambah Alamat Pengiriman</p>
<div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-8 gap-8">

    <div class="flex justify-between ">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Nama Penerima</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
        </div>
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Nomor HP</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="1234567890132456">
        </div>
    </div>

    <div class="flex justify-between ">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Provinsi</label>
            <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                <option value="0">-- pilih provinsi tujuan --</option>
                <option value="0">-- pilih provinsi tujuan --</option>
            </select>
        </div>
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Kota/Kabupaten</label>
            <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                <option value="0">-- pilih kota/kabupaten tujuan --</option>
                <option value="0">-- pilih kota/kabupaten tujuan --</option>
            </select>
        </div>
    </div>

    <div class="flex justify-between ">
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Kecamatan</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
        </div>
        <div class="flex flex-col w-[472px]">
            <label class="text-[20px] text-[#0A0A0B] font-semibold">Kode Pos</label>
            <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="1234567890132456">
        </div>
    </div>

    <div class="flex flex-col w-[100%]">
        <label class="text-[20px] text-[#0A0A0B] font-semibold">Alamat Lengkap</label>
        <textarea type="text" class="rounded-lg border border-[#969EBA] h-[130px] pl-3 py-2 text-[20px]" placeholder="Alamat Saya Disini "></textarea>
    </div>
    <div class="flex">
        <button class="btn btn-outline btn-error font-semibold text-[20px] w-fit mr-6">Batal</button>
        <button class="btn btn-primary font-semibold text-[20px] w-fit">Simpan</button>

    </div>
</div>

@endsection