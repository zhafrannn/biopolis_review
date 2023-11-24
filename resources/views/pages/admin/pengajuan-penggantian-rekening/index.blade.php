@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Pengajuan Penggantian Rekening</h3>
    </div>

    {{-- start: Card --}}
    @foreach($users as $user)
    <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <div class="mb-[20.86px] flex items-center gap-[13.54px]">
            <div class="flex items-center gap-[3.39px]">
                <p class="text-[13px] font-semibold">Farisku</p>
                <p class="text-[13px]">21 Okt 2023</p>
            </div>
        </div>

        <div class="flex items-center gap-[13.54px]">
            <div class="flex w-[55px] items-center justify-center">
                <img src="{{ asset('images/icons/card.svg') }}" alt="">
            </div>
            <div class="flex flex-1 flex-col gap-[20px]">
                {{-- Input --}}
                <div class="flex flex-col gap-[3.54px]">
                    <div class="w-3/12">
                        <h2 class="text-[17px] font-semibold text-[#969EBA]">{Pemilik Rekening}</h2>
                    </div>
                    <div class="flex-1">
                        <input type="text" class="w-full rounded-xl border p-[13px]" value="{{ $user->nama_rekening }}">
                    </div>
                </div>
                {{-- Input --}}
                {{-- Input --}}
                <div class="flex flex-col gap-[3.54px]">
                    <div class="w-3/12">
                        <h2 class="text-[17px] font-semibold text-[#969EBA]">Bank</h2>
                    </div>
                    <div class="flex-1">
                        <input type="text" class="w-full rounded-xl border p-[13px]" value="{{ $user->nama_rekening }}">
                    </div>
                </div>
                {{-- Input --}}
            </div>
        </div>

        <div class="flex justify-end">
            <button class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white">Konfirmasi
                Rekening</button>
        </div>
    </div>
    @endforeach
    {{-- end: Card --}}



</section>
@endsection