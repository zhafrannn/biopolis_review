@extends('layouts.auth')

@section('content')
    <section class="mb-[27.92px] text-[#0A0A0B]">

        <div class="mb-[28px]">
            <h3 class="text-[20.32px] font-semibold">Pengajuan Penggantian Rekening</h3>
        </div>

        <div class="mb-[28px] flex items-center justify-end">

            <div>
                <select name="" id=""
                    class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div>
        </div>

        {{-- start: Card --}}
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
                            <h2 class="text-[17px] font-semibold text-[#969EBA]">Pemilik Rekening</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                        </div>
                    </div>
                    {{-- Input --}}
                    {{-- Input --}}
                    <div class="flex flex-col gap-[3.54px]">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold text-[#969EBA]">Bank</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                        </div>
                    </div>
                    {{-- Input --}}
                </div>
            </div>

            <div class="flex justify-end">
                <button
                    class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white">Konfirmasi
                    Rekening</button>
            </div>
        </div>
        {{-- end: Card --}}



    </section>
@endsection
