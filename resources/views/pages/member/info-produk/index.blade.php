@extends('layouts.auth-member')

@section('title')
Checkout Product
@endsection

@section('content')
<section class="hidden lg:block">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Produk</h2>
        <div class="flex items-center rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[27px] font-semibold">Pembelian Produk</h2>
                <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Produk</h4>
                <h3 class="text-[40px]">20 Produk</h3>
            </div>
        </div>
    </div>

    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Pembelian</h3>
        <div class="p-[20.20px]">

            <div class="flex items-center justify-end gap-[14px]">
                <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div>
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] mt-5">

                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Jenis Transaksi</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Nominal</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Komisi</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal</p>
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
    </div>
</section>

<!-- mobile -->
<section class="lg:hidden">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[20px] font-semibold">Laporan Produk</h2>
        <div class="relative rounded-xl bg-white p-[16px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
            </div>
            <div class="mb-4">
                <div class="flex justify-between">
                    <h3 class="text-[16px] font-semibold">Pembelian Produk</h3>
                </div>
                <h4 class="mt-[10px] text-[16px] text-[#969EBA]">Total Produk</h4>
                <h3 class="text-[18px] font-semibold">20 Produk</h3>
            </div>
        </div>
    </div>
    <!-- <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Pembelian</h3>
        <div class="p-[20.20px]">

            <div class="flex items-center justify-end gap-[14px]">
                <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div>
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] mt-5">

                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Jenis Transaksi</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Nominal</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Komisi</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal</p>
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
    </div> -->
</section>
<!-- end mobile -->
@endsection