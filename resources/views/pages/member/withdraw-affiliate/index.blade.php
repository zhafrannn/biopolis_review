@extends('layouts.auth-member')

@section('title')
Point
@endsection

@section('content')
<section class="mb-[27.92px]">
    <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Saldo</h2>
    <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <div class="flex items-center">
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[27px] font-semibold">Saldo Saya</h2>
                <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Saldo</h4>
                <h3 class="text-[40px]">20 Saldo</h3>
            </div>
            <div class="flex w-2/12 items-center justify-center">
                <div class="h-[118px] w-[1px] border"></div>
            </div>
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Saldo</h2>
                <div class="flex w-[100%]">
                    <div class="grid-flow">
                        <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Order Affiliate</h4>
                        <h3 class="text-[33px]">Rp2.000.000</h3>
                    </div>
                    <div class="">
                        <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Referral</h4>
                        <h3 class="text-[33px]">Rp0</h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-[100%]">
            <button class="btn bg-primary text-white font-[26px] font-semibold w-[100%] h-16">Tukar Saldo</button>
        </div>
    </div>
</section>

<section class="rounded-xl border p-[20.23px]">
    <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Saldo</h3>
    <div class="p-[20.20px]">

        <div class="flex items-center justify-between gap-[14px]">
            <div class="flex items-centera justify-between h-[33.86px]">
                <button class="rounded-[10px] p-[7px_20px] border bg-white text-[12.7px] text-[#969EBA]">Uang Masuk</button>
                <button class="rounded-[10px] p-[7px_20px] border bg-white text-[12.7px] text-[#969EBA] ml-5">Riwayat Penukaran</button>
            </div>
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
                        <th class="p-[10px] text-left">Jenis Transaksi</th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Nominal</p>
                            </div>
                        </th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Total Saldo</p>
                            </div>
                        </th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Tanggal</p>
                            </div>
                        </th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Status</p>
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