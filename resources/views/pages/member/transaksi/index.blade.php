@extends('layouts.auth-member')

@section('title')
    Transaksi | Biopolis Propolis
@endsection

@section('content')
    <section class="mb-[27.92px] text-[#0A0A0B]">
        <div class="mb-[28px]">
            <h3 class="text-[20.32px] font-semibold">Daftar Transaksi</h3>
        </div>

        <!-- <div class="mb-[28px] flex flex-col items-center justify-between gap-2 lg:flex-row">
                                                                                                                    <div class="flex flex-col items-center lg:flex-row">
                                                                                                                        <p class="mr-[27px] text-[13px] font-semibold">Status</p>
                                                                                                                        <div class="flex items-center gap-2 lg:gap-[13px]">
                                                                                                                            <button id="button-tab-all" onclick="HandleTab('tab-all')" class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[13.54px] text-primary">Semua</button>
                                                                                                                            <button id="button-tab-packing" onclick="HandleTab('tab-packing')" class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Dikemas</button>
                                                                                                                            <button id="button-tab-completed" onclick="HandleTab('tab-completed')" class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Sudah
                                                                                                                                Dikirim</button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div> -->


        <a href="{{ url('/member/transaction/waiting-order') }}">
            <div class="mb-[20px] flex justify-between rounded-xl border border-[#969EBA] p-[13.54px]">

                <div class="flex items-center gap-[13.54px]">
                    <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
                    <p class="text-[16.93px]">Menunggu Pembayaran</p>
                </div>
                <div class="flex items-center">

                    @if ($count_waiting_transaction !== 0)
                        <div class="min-w-[20px] rounded-md bg-error px-1 text-center text-white">
                            {{ $count_waiting_transaction }}
                        </div>
                    @endif

                    <img src="{{ asset('images/icons/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </a>

        <div id="tab-all">

            @foreach ($transaction as $item)
                {{-- start: Card --}}
                <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="mb-[20.86px] flex flex-col gap-[13.54px] lg:flex-row lg:items-center">
                        <div class="flex items-start justify-between gap-[3.39px] lg:items-center">
                            <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                            <p class="font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-[13px]">{{ $item->date }}</p>

                            @if ($item->shipping_status == 'packing')
                                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                                    <p class="text-[10px] font-semibold">Dikemas</p>
                                </div>
                            @endif

                            @if ($item->shipping_status == 'deliver')
                                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                                    <p class="text-[10px] font-semibold">Dikirim</p>
                                </div>
                            @endif

                        </div>
                        <div class="flex items-center gap-1">
                            <p class="text-[13.54px] font-semibold">No Invoice : </p>
                            <p class="text-[13.54px]">{{ $item->payment_code }}</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <p class="items-center text-[13.54px] font-semibold">No Resi :</p>
                            @if ($item->shipping_status == 'deliver')
                                <p class="text-[13.54px]">{{ $item->shipping_code }}</p>
                            @endif
                            @if ($item->shipping_status == 'packing')
                                <p class="text-[13.54px]">Menunggu dikirim</p>
                            @endif
                        </div>
                    </div>

                    <div class="items-center justify-between lg:flex">
                        <div class="flex items-center gap-[13.54px]">
                            <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                                <img src="" class="h-full w-full" alt="">
                            </div>
                            <div>
                                <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                                <p class="text-[13.54px]">{{ number_format($item->product->price) }}</p>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 lg:pl-[13.54px]">
                            <p class="justify-end text-[14px] lg:flex lg:text-[16px]">Total Belanja</p>
                            <h3 class="justify-end text-[14px] font-semibold lg:flex lg:text-[16px]">
                                Rp{{ number_format($item->total_payment) }}
                            </h3>
                        </div>
                    </div>
                    {{-- Modal --}}
                    <div class="flex justify-end">
                        <button class="text-[12px] font-semibold text-primary"
                            onclick="modal_transaction_{{ $item->id }}.showModal()">
                            Lihat Detail Transaksi
                        </button>
                        <dialog id="modal_transaction_{{ $item->id }}" class="modal">
                            <div class="modal-box bg-[#E5E5E5] p-0">
                                <form method="dialog">
                                    <button class="btn btn-circle btn-ghost btn-sm absolute right-5 top-5">✕</button>
                                </form>
                                {{-- --}}
                                <div class="mb-5 bg-white p-5">
                                    <div class="mb-5">
                                        <h3 class="font-semibold lg:text-2xl">Detail Transaksi</h3>
                                    </div>

                                    <div class="mb-5">
                                        <h4 class="font-semibold lg:text-[20px]">Sedang dikemas</h4>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between text-[14px] lg:text-[16px]">
                                            <p class="text-[#969EBA]">No Invoice</p>
                                            <p class="text-primary">{{ $item->payment_code }}</p>
                                        </div>
                                        <div class="flex items-center justify-between text-[14px] lg:text-[16px]">
                                            <p class="text-[#969EBA]">Tanggal pembelian</p>
                                            <p class="">{{ $item->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-5 bg-white p-5">
                                    <div class="mb-5">
                                        <h3 class="font-semibold">Detail Produk</h3>
                                    </div>

                                    <div class="items-center justify-between lg:flex">
                                        <div class="flex items-center gap-3">
                                            <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                                                <img src="" class="h-full w-full" alt="">
                                            </div>
                                            <div>
                                                <h5 class="text-[14px] font-semibold text-[#0A0A0B] lg:text-[20px]">Paket
                                                    Biopolis</h5>
                                                <p>1 x Rp{{ number_format($item->product->price) }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-[14px] lg:mt-0 lg:text-right lg:text-[20px]">
                                            <h5 class="">Total Belanja</h5>
                                            <p class="font-semibold text-[#0A0A0B]">1 x
                                                {{ number_format($item->product->price) }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                {{-- --}}
                                <div class="bg-white p-5">
                                    <div class="mb-5">
                                        <h3 class="font-semibold">Info pengiriman</h3>
                                    </div>

                                    <div>
                                        <table class="w-full text-[14px] lg:text-[20px]">
                                            <tr>
                                                <td>Kurir</td>
                                                <td>: JNE Reguler </td>
                                            </tr>
                                            <tr>
                                                <td>No Resi</td>
                                                <td>: @if ($item->shipping_status != 'packing')
                                                        {{ $item->shipping_code }}
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                {{-- --}}
                            </div>
                        </dialog>
                    </div>
                    {{-- End Modal --}}
                </div>
                {{-- end: Card --}}
            @endforeach
        </div>

        <div class="">
            @foreach ($user_payment_failed as $item)
                <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="mb-[20.86px] flex flex-col gap-[13.54px] lg:flex-row lg:items-center">
                        <div class="flex items-start gap-[3.39px] lg:items-center">
                            <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                            <p class="font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-[13px]">{{ $item->date }}</p>

                            <div class="rounded-[5px] bg-red-200 px-[6.67px] py-[3.39px] text-red-500">
                                <p class="text-[10px] font-semibold">Failed</p>
                            </div>


                        </div>
                        <div class="flex items-center gap-1">
                            <p class="text-[13.54px] font-semibold">No Invoice : </p>
                            <p class="text-[13.54px]">{{ $item->payment_code }}</p>
                        </div>
                    </div>

                    <div class="items-center justify-between lg:flex">
                        <div class="flex items-center gap-[13.54px]">
                            <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                                <img src="" class="h-full w-full" alt="">
                            </div>
                            <div>
                                <h3 class="text-[16px] font-semibold">Paket Biopolis</h3>
                                <p class="text-[13.54px]">{{ number_format($item->product->price) }}</p>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 lg:pl-[13.54px]">
                            <p class="justify-end text-[14px] lg:flex lg:text-[16px]">Total Belanja</p>
                            <h3 class="justify-end text-[14px] font-semibold lg:flex lg:text-[16px]">
                                Rp{{ number_format($item->total_payment) }}
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="tab-packing" class="hidden">
            asd
        </div>

        <div id="tab-paid" class="hidden">
            asd
        </div>

    </section>

    <script>
        const HandleTab = (type) => {
            $('#tab-all').addClass('hidden')
            $('#tab-packing').addClass('hidden')
            $('#tab-completed').addClass('hidden')

            $('#button-tab-all').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

            $('#button-tab-packing').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

            $('#button-tab-completed').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

            if (type == 'tab-all') {
                $('#tab-all').removeClass('hidden')
                $('#button-tab-all').addClass('border-primary bg-primary bg-opacity-20 text-primary')
            }
            if (type == 'tab-packing') {
                $('#tab-packing').removeClass('hidden')
                $('#button-tab-packing').addClass('border-primary bg-primary bg-opacity-20 text-primary')
            }
            if (type == 'tab-completed') {
                $('#tab-completed').removeClass('hidden')
                $('#button-tab-completed').addClass('border-primary bg-primary bg-opacity-20 text-primary')
            }
        }
    </script>
@endsection
