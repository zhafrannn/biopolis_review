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
                <h3 class="text-[40px]">{{ count($users) }} Produk</h3>
            </div>
        </div>
    </div>

    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[10px] text-[16.93px] font-semibold">Riwayat Pembelian</h3>
        <div class="p-[20.20px]">
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] mt-5">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Kode Produk</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Jumlah Paket</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Bonus Point</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Bayar</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal</p>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px]">{{$user->product->product_code}}</td>
                            <td class="p-[10px]">{{$user->product->product_name}}</td>
                            <td class="p-[10px]">{{$user->product->point}}</td>
                            <td class="p-[10px]">Rp{{number_format($user->total_payment)}}</td>
                            <td class="p-[10px]">{{$user->created_at}}</td>
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
                <h3 class="text-[18px] font-semibold">{{ count($users) }} Produk</h3>
            </div>
        </div>
    </div>
    <div class="rounded-xl border p-[10px]">
        <h3 class="text-[16.93px] font-semibold px-[10px]">Riwayat Pembelian</h3>
        <div class="p-[10px]">
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] mt-5  overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Kode Produk</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Jumlah Paket</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Bonus Point</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Total Bayar</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Tanggal</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px] text-[10px] text-center">{{$user->product->product_code}}</td>
                            <td class="p-[10px] text-[10px] text-center">{{$user->product->product_name}}</td>
                            <td class="p-[10px] text-[10px] text-center">{{$user->product->point}}</td>
                            <td class="p-[10px] text-[10px] text-center">Rp{{number_format($user->total_payment)}}</td>
                            <td class="p-[10px] text-[10px] text-center">{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- end mobile -->

@endsection