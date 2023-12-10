@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px]">
    <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Penjualan</h2>
    <div class="flex items-center rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <div class="w-5/12">
            <h2 class="mb-[7px] text-[27px] font-semibold">Pendapatan</h2>
            <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Pendapatan</h4>
            <h3 class="text-[40px]">Rp. {{ number_format($total_sale) }}</h3>
        </div>
        <!-- <div class="flex w-2/12 items-center justify-center">
            <div class="h-[118px] w-[1px] border"></div>
        </div>
        <div class="w-5/12">
            <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Mitra Baru</h2>
            <div class="grid grid-cols-2">
                <div>
                    <h4 class="mb-[8px] text-[20.32px] text-[#969EBA]">Pendapatan Hari Ini</h4>
                    <h3 class="text-[33px]">Rp.2.000.000</h3>
                </div>
                <div>
                    <h4 class="mb-[8px] text-[20.32px] text-[#969EBA]">Produk Terjual</h4>
                    <h3 class="text-[33px]">20 Produk</h3>
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="rounded-xl border p-[20.23px]">
    <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Mitra Baru</h3>
    <div class="p-[20.32px]">
        <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <!-- <div class="flex items-center justify-end gap-[14px]">
                <button class="rounded-[10px] bg-primary p-[7px_20px]">
                    <img src="{{ asset('images/icons/document-download.svg') }}" alt="">
                </button>
                <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div> -->
            <table class="w-full">
                <thead class="text-md font-semibold">
                    <tr class="border-b border-[#969EBA]">
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Jenis Produk</p>
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
                                <p>Pembeli</p>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($paids as $paid)
                    <tr class="border-b border-[#969EBA]">
                        <td class="p-[10px]">{{ $paid->product->product_name }}</td>
                        <td class="p-[10px]">Rp. {{ number_format($paid->product->price) }}</td>
                        <td class="p-[10px]">{{ $paid->user->name }}</td>
                        <td class="p-[10px]">{{ $paid->created_at }}</td>
                        <td class="p-[10px]">{{ $paid->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection