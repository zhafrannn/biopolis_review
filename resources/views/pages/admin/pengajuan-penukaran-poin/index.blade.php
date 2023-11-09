@extends('layouts.auth')

@section('content')
    <section class="mb-[27.92px] text-[#0A0A0B]">

        <div class="mb-[28px]">
            <h3 class="text-[20.32px] font-semibold">Pengajuan Penukaran Poin</h3>
        </div>

        <div class="mb-[28px] flex items-center justify-between">
            <div class="flex items-center">
                <p class="mr-[27px] text-[13px] font-semibold">Status</p>
                <div class="flex items-center gap-[13px]">
                    <button
                        class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[13.54px] text-primary">Semua</button>
                    <button
                        class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Diproses</button>
                    <button
                        class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Selesai</button>
                </div>
            </div>
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
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">Dikemas</p>
                </div>
                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>

                <div>
                    <p class="text-[13.54px] font-semibold">No Pencairan</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[13.54px]">

                    <div>
                        <h3 class="text-[16px] font-semibold">Faris Ku</h3>
                        <p class="text-[13.54px]">Jumlah yang dicairkan</p>
                        <p class="text-[13.54px]">Rp2.000.000</p>
                    </div>
                </div>
                <div class="border-l-2 pl-[13.54px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[13.54px]">Faris Ku</p>
                        <p class="text-[13.54px]">Bank BCA</p>
                        <p class="text-[13.54px]">314225112</p>
                    </div>

                </div>

            </div>

            <div class="flex justify-end">
                <button
                    class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white">Konfirmasi
                    Pencairan</button>
            </div>
        </div>
        {{-- end: Card --}}



    </section>
@endsection
