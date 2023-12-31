<section class="mb-[27.92px] text-[#0A0A0B] lg:hidden">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
    </div>

    <div class="rounded-[10px] border border-[#E5E5E5] p-[13.54px]">

        <div class="mb-[27.69px] flex items-center gap-[13.54p]">
            <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
            <p class="text-[16.93px]">Menunggu Pembayaran</p>
        </div>

        <div class="flex flex-col gap-5">
            @foreach ($user_payment as $item)
            <a href="{{ $item->redirect_url }}" target="_blank">
                {{-- start: Card --}}
                <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="mb-[13.54px] flex items-end justify-between">
                        <div class="flex items-center gap-[3.39px]">
                            <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                            <div class="">
                                <p class="text-[12px] font-semibold">{{ Auth::user()->name }}</p>
                                <p class="text-[12px]">{{ $item->date }}</p>
                            </div>
                        </div>

                        <div class="gap-[13.54px] text-end">
                            <p class="text-[10px]">Bayar Sebelum</p>
                            <p class="text-[10px]">{{ $item->valid_until }}</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="mt-5">
                            <h3 class="text-[12px]">Total Belanja</h3>
                            <h3 class="text-[12px] font-semibold">Rp{{ number_format($item->total_payment) }}</h3>
                        </div>
                        <div class="mt-5">
                            <a href="{{$item->redirect_url}}" target="_blank" class="bg-primary p-[8px_12px] rounded-lg text-white text-[14px]">Bayar Sekarang</a>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
                {{-- end: Card --}}
            </a>
            @endforeach
        </div>
    </div>


</section>