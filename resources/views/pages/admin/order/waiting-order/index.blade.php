@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
    </div>

    <div class="rounded-[10px] border border-[#E5E5E5] p-[13.54px]">

        <div class="mb-[27.69px] flex items-center gap-[13.54px]">
            <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
            <p class="text-[16.93px]">Menunggu Pembayaran</p>
        </div>

        <div class="flex flex-col gap-5">
            @foreach ($user_payment as $item)
            {{-- start: Card --}}
            <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="mb-[13.54px] flex items-center justify-between">
                    <div class="items-ce nter flex gap-[3.39px]">
                        <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                        <p class="font-semibold">{{ $item->user->name }}</p>
                        <p class="text-[13px]">{{ $item->date }}</p>
                    </div>

                    <div class="flex items-center gap-[13.54px]">
                        <p class="text-[13px]">Bayar Sebelum</p>
                        <p class="text-[13px]">{{ $item->valid_until }}</p>
                    </div>
                </div>

                <div class="flex items-end justify-between">
                    <div class="flex items-center gap-[40px]">
                        <div class="flex items-center gap-[13.54px]">
                            <div>
                                <h3 class="text-[17px]">Kode Pembayaran</h3>
                                <h3 class="text-[17px] font-semibold">{{ $item->payment_code }}</h3>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-[17px]">Total Belanja</h3>
                            <h3 class="text-[17px] font-semibold">Rp {{ number_format($item->total_payment) }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Card --}}
            @endforeach
        </div>
    </div>


</section>
@endsection