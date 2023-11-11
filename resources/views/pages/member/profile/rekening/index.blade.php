@extends('layouts.member-profile')

@section('title')
Profile
@endsection

@section('content')
<p class="text-[32px] text-[#0A0A0B] font-semibold">Rekening Anda</p>
<div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-7">
    <div class="flex justify-between flex-col rounded-2xl border border-primary bg-[#F2FFF5] w-[100%] px-[24px] py-[24px]">
        <div class="flex items-center">
            <img src="{{asset('images/icons/card.svg')}}" alt="icon" class="px-6">
            <div class="flex flex-col w-[806px] h-[208px] gap-8">
                <div class="flex flex-col w-[100%]">
                    <label class="text-[20px] text-[#969EBA] font-semibold">Pemilik Rekening</label>
                    <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                </div>
                <div class="flex justify-between W-[100%]">
                    <div class="flex flex-col w-[387px]]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">Bank</label>
                        <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px] w-[387px]" value="BNI">
                    </div>
                    <div class="flex flex-col w-[387px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">No Rekening</label>
                        <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px] w-[387px]" value="1234567890132456">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-3">
            <button class="btn font-semibold text-[12px] text-[#969EBA] py-4 px-6 rounded-xl w-fit">Ganti Rekening</button>
        </div>
    </div>



</div>


@endsection