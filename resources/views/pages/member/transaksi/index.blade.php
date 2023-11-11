@extends('layouts.auth-member')

@section('title')
    Checkout Product
@endsection

@section('content')
    <section class="mb-[27.92px] text-[#0A0A0B]">

        <div class="mb-[28px]">
            <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
        </div>

        <div class="mb-[28px] flex items-center justify-between">
            <div class="flex items-center">
                <p class="mr-[27px] text-[13px] font-semibold">Status</p>
                <div class="flex items-center gap-[13px]">
                    <button
                        class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[13.54px] text-primary">Semua</button>
                    <button
                        class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Dikemas</button>
                    <button
                        class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Sedang
                        Dikirim</button>
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

        <a href="{{ url('/transaksi/menunggu-pembayaran') }}">
            <div class="mb-[20px] flex justify-between rounded-xl border border-[#969EBA] p-[13.54px]">

                <div class="flex items-center gap-[13.54px]">
                    <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
                    <p class="text-[16.93px]">Menunggu Pembayaran</p>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex min-h-[30px] min-w-[30px] items-center justify-center rounded-xl bg-error p-2 text-center align-middle text-[12px] text-white">
                        10</div>
                    <img src="{{ asset('images/icons/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </a>

        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">Farisku</p>
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">Dikemas</p>
                </div>
                <div>
                    <p class="text-[13.54px]">No Invoice</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="" class="h-full w-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                        <p class="text-[13.54px]">1 Paket x Rp.2.000.000</p>
                    </div>
                </div>
                <div class="pl-[13.54px]">
                    <p class="flex justify-end text-[16px]">Total Belanja</p>
                    <h3 class="flex justify-end text-[16px] font-semibold">Rp2.000.000</h3>

                </div>
            </div>

            <div class="flex justify-end">
                <p class="text-[16px] font-semibold text-primary">Lihat Detail Transaksi</p>
            </div>
        </div>
        {{-- end: Card --}}

        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">Farisku</p>
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">Dikemas</p>
                </div>
                <div>
                    <p class="text-[13.54px]">No Invoice</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="" class="h-full w-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                        <p class="text-[13.54px]">1 Paket x Rp.2.000.000</p>
                    </div>
                </div>
                <div class="pl-[13.54px]">
                    <p class="flex justify-end text-[16px]">Total Belanja</p>
                    <h3 class="flex justify-end text-[16px] font-semibold">Rp2.000.000</h3>

                </div>
            </div>

            <div class="flex justify-end">
                <p class="text-[16px] font-semibold text-primary">Lihat Detail Transaksi</p>
            </div>
        </div>
        {{-- end: Card --}}

        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">Farisku</p>
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>
                <div class="rounded-[5px] bg-[#F2FFF5] px-[6.67px] py-[3.39px] text-[#20B15A]">
                    <p class="text-[10px] font-semibold">Sedang Dikirim</p>
                </div>
                <div>
                    <p class="text-[13.54px]">No Invoice</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="" class="h-full w-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                        <p class="text-[13.54px]">1 Paket x Rp.2.000.000</p>
                    </div>
                </div>
                <div class="pl-[13.54px]">
                    <p class="flex justify-end text-[16px]">Total Belanja</p>
                    <h3 class="flex justify-end text-[16px] font-semibold">Rp2.000.000</h3>

                </div>
            </div>

            <div class="flex justify-end">
                <p class="text-[16px] font-semibold text-primary">Lihat Detail Transaksi</p>
            </div>
        </div>
        {{-- end: Card --}}

        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">Farisku</p>
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>
                <div class="rounded-[5px] bg-[#F1F7FF] px-[6.67px] py-[3.39px] text-[#1A4C93]">
                    <p class="text-[10px] font-semibold">Sedang Dikirim</p>
                </div>
                <div>
                    <p class="text-[13.54px]">No Invoice</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="" class="h-full w-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                        <p class="text-[13.54px]">1 Paket x Rp.2.000.000</p>
                    </div>
                </div>
                <div class="pl-[13.54px]">
                    <p class="flex justify-end text-[16px]">Total Belanja</p>
                    <h3 class="flex justify-end text-[16px] font-semibold">Rp2.000.000</h3>

                </div>
            </div>

            <div class="flex justify-end">
                <p class="text-[16px] font-semibold text-primary">Lihat Detail Transaksi</p>
            </div>
        </div>
        {{-- end: Card --}}

        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">Farisku</p>
                    <p class="text-[13px]">21 Okt 2023</p>
                </div>
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">Dikemas</p>
                </div>
                <div>
                    <p class="text-[13.54px]">No Invoice</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="" class="h-full w-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                        <p class="text-[13.54px]">1 Paket x Rp.2.000.000</p>
                    </div>
                </div>
                <div class="pl-[13.54px]">
                    <p class="flex justify-end text-[16px]">Total Belanja</p>
                    <h3 class="flex justify-end text-[16px] font-semibold">Rp2.000.000</h3>

                </div>
            </div>

            <div class="flex justify-end">
                <p class="text-[16px] font-semibold text-primary">Lihat Detail Transaksi</p>
            </div>
        </div>
        {{-- end: Card --}}


    </section>
@endsection
