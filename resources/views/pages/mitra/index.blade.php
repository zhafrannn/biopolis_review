@extends('layouts.auth')

@section('content')
    <section class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Mitra</h2>
        <div class="flex items-center rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[27px] font-semibold">Mitra Biopolis</h2>
                <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Mitra</h4>
                <h3 class="text-[40px]">20 Mitra</h3>
            </div>
            <div class="flex w-2/12 items-center justify-center">
                <div class="h-[118px] w-[1px] border"></div>
            </div>
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Mitra Baru</h2>
                <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Hari ini</h4>
                <h3 class="text-[33px]">20 Mitra</h3>
            </div>
        </div>
    </section>

    <section class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Mitra Baru</h3>
        <div class="p-[20.32px]">
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="flex items-center justify-end gap-[14px]">
                    <button class="rounded-[10px] bg-primary p-[7px_20px]">
                        <img src="{{ asset('images/icons/document-download.svg') }}" alt="">
                    </button>
                    <select name="" id=""
                        class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                        <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                        <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                        <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    </select>
                </div>
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-left">Ranking</th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Nama Mitra</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal Bergabung</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Pembelian</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Poin</p>
                                </div>
                            </th>
                            <th class="p-[10px]">

                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                        </tr>
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
