@extends('layouts.auth-member')

@section('title')
Point
@endsection

@section('content')
<section class="hidden lg:block">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Poin</h2>
        <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="relative flex items-center">
                <div class="w-3/12">
                    <h2 class="mb-[7px] text-[27px] font-semibold">Poin Saya</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Poin</h4>
                    <h3 class="text-[40px]">{{ Auth::user()->user_wallet->current_point }} Poin</h3>
                </div>
                <div class="flex w-1/12 items-center justify-center">
                    <div class="h-[118px] w-[1px] border"></div>
                </div>
                <div class="relative w-3/12">
                    <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Poin</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Order Affiliate</h4>
                    <h3 class="text-[33px]">{{ $res['point_repeat_order'] }} Poin</h3>

                </div>

                <div class="flex w-1/12 items-center justify-center">
                    <div class="h-[118px] w-[1px] border"></div>
                </div>

                <div class="relative w-3/12">
                    <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Poin</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Register Affiliate</h4>
                    <h3 class="text-[33px]">{{ $res['point_register'] }} Poin</h3>
                </div>

                <div class="absolute right-0 top-0">
                    <div class="dropdown-end dropdown">
                        <label tabindex="0" class="cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 8V13" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.9945 16H12.0035" stroke="#969EBA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>
                        <div tabindex="0" class="dropdown-content z-[1] h-[150px] w-[308px] overflow-hidden rounded-xl border bg-base-100 p-6 shadow-md">
                            <p class="text-[14px] font-semibold text-primary">
                                Informasi Penukaran Poin
                            </p>
                            <div class="flex">
                                <div class="w-4/12 text-[14px] font-semibold text-black">
                                    <p>500 Poin</p>
                                    <p>1000 Poin</p>
                                    <p>2000 Poin</p>
                                    <p>3000 Poin</p>
                                </div>
                                <div class="w-8/12 text-[14px]">
                                    <p>Rp4.000.000</p>
                                    <p>Rp10.000.000</p>
                                    <p>Motor + Rp5.000.000</p>
                                    <p>Umroh + Rp10.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-[100%]">
                @include('components.member.modal-poin.index')
            </div>
        </div>
    </div>
    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Poin</h3>
        <div class="p-[20.20px]">

            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] justify-between">
                    <button class="rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA]">Uang
                        Masuk</button>
                    <button class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA]">Riwayat
                        Penukaran</button>
                </div>
                <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div>
            <div class="mt-5 rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
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
                                    <p>Total Poin</p>
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

                        @foreach ($res['payment_user_use'] as $item)
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>15 Point</p>
                                @else
                                <p>5 Point</p>
                                @endif
                            </td>
                            <td class="p-[10px]">{{ $item->date }}</td>
                            <td class="p-[10px]">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>Pendaftaran Member</p>
                                @else
                                <p>Affiliate Pembelian Product </p>
                                @endif
                            </td>
                            <td class="p-[10px]">-</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- mobile -->
<section class="lg:hidden">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[20px] font-semibold bg-white">Laporan Poin</h2>
        <div class="relative rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
            </div>
            <div class="mb-4">
                <div class="flex justify-between">
                    <h3 class="text-[16px] font-semibold">Poin Saya</h3>
                </div>
                <h4 class="mt-[10px] text-[16px] text-[#969EBA]">Total Poin</h4>
                <h3 class="text-[18px] font-semibold">{{ Auth::user()->user_wallet->current_point }} Poin</h3>
            </div>
            <div class="w-[100%]">
                @include('components.member.modal-poin.mobile')
            </div>
        </div>
        <div class="w-full mt-5">
            <h2 class="mb-[10px] text-[20px] font-semibold">Rincian Poin</h2>
            <div class="flex justify-between">
                <h4 class="mb-[10px] text-[14px] text-[#969EBA]">Order Affiliate</h4>
                <h3 class="text-[16px]">{{ $res['point_repeat_order'] }} Poin</h3>
            </div>
            <div class="flex justify-between">
                <h4 class="mb-[10px] text-[14px] text-[#969EBA]">Register Affiliate</h4>
                <h3 class="text-[16px]">{{ $res['point_register'] }} Poin</h3>
            </div>

            <div class="absolute right-0 top-0">
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 8V13" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.9945 16H12.0035" stroke="#969EBA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <div tabindex="0" class="dropdown-content z-[1] h-[150px] w-[308px] overflow-hidden rounded-xl border bg-base-100 p-6 shadow-md">
                        <p class="text-[14px] font-semibold text-primary">
                            Informasi Penukaran Poin
                        </p>
                        <div class="flex">
                            <div class="w-4/12 text-[14px] font-semibold text-black">
                                <p>500 Poin</p>
                                <p>1000 Poin</p>
                                <p>2000 Poin</p>
                                <p>3000 Poin</p>
                            </div>
                            <div class="w-8/12 text-[14px]">
                                <p>Rp4.000.000</p>
                                <p>Rp10.000.000</p>
                                <p>Motor + Rp5.000.000</p>
                                <p>Umroh + Rp10.000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Poin</h3>
        <div class="p-[20.20px]">

            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] justify-between">
                    <button class="rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA]">Uang
                        Masuk</button>
                    <button class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA]">Riwayat
                        Penukaran</button>
                </div>
                <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>
            </div>
            <div class="mt-5 rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
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
                                    <p>Total Poin</p>
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

                        @foreach ($res['payment_user_use'] as $item)
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">-</td>
                            <td class="p-[10px]">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>15 Point</p>
                                @else
                                <p>5 Point</p>
                                @endif
                            </td>
                            <td class="p-[10px]">{{ $item->date }}</td>
                            <td class="p-[10px]">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>Pendaftaran Member</p>
                                @else
                                <p>Affiliate Pembelian Product </p>
                                @endif
                            </td>
                            <td class="p-[10px]">-</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
</section>
<!-- end mobile -->

@endsection