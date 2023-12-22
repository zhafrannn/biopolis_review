@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Daftar Pesanan</h3>
    </div>

    <!-- <div class="mb-[28px] flex items-center justify-between">
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
    </div> -->

    <a href="{{ url('/admin/order/waiting-order') }}">
        <div class="mb-[20px] flex justify-between rounded-xl border border-[#969EBA] p-[13.54px]">
            <div class="flex items-center gap-[13.54px]">
                <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
                <p class="text-[16.93px]">Menunggu Pembayaran</p>
            </div>
            <div class="flex items-center">
                @if ($count_waiting_order != 0)
                <div class="flex min-h-[30px] min-w-[30px] items-center justify-center rounded-xl bg-error p-2 text-center align-middle text-[12px] text-white">
                    {{$count_waiting_order}}
                </div>
                <img src="{{ asset('images/icons/arrow-right.svg') }}" alt="">
                @endif
            </div>
        </div>
    </a>

    <div>
        @foreach ($orders as $item)
        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center justify-between gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <img src="{{ asset('images/icons/profile.svg') }}" alt="">
                    <p class="font-semibold">{{ $item->user->name }}</p>
                    <p class="text-[13px]">{{ $item->date }}</p>

                    <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                        <p class="text-[10px] font-semibold">Dikemas</p>
                    </div>
                </div>

                <div>
                    <p class="text-[13.54px] font-semibold">No Invoice : {{ $item->payment_code }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[13.54px]">
                    <div class="h-[102px] w-[102px] bg-[#D9D9D9]">
                        <img src="{{ asset('/images/biopolis.png') }}" class="h-full w-full object-cover" alt="">
                    </div>
                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $item->product->product_name }} Biopolis</h3>
                        <p class="text-[13.54px]">{{ $item->product->description }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 border-l-2 pl-[13.54px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Alamat</h3>
                        <?php $provinsi = explode('-', $item->user->user_biodata->provinsi); ?>
                        <p class="text-[13.54px]">Provinsi : {{ $provinsi[1] }}</p>
                        <?php $kota = explode('-', $item->user->user_biodata->kota); ?>
                        <p class="text-[13.54px]">Kota : {{ $kota[1] }}</p>
                        <p class="text-[13.54px]">{{ $item->user->user_biodata->alamat_lengkap }}</p>
                    </div>
                    <div>
                        <div class="mb-[6.77px] flex flex-col gap-[3.39px]">
                            <label for="" class="text-[13.54px]">Kurir</label>
                            @if ($item->shipping_type == 'on_location')
                            <input type="text" value="On Location" readonly class="rounded-[10px] border border-[#969EBA] px-[13.54px] py-[6.77px]" placeholder="Masukan Kurir">
                            @endif
                            @if ($item->shipping_type == 'on_send')
                            <input type="text" value="JNE Reguler" readonly class="rounded-[10px] border border-[#969EBA] px-[13.54px] py-[6.77px]" placeholder="Masukan Kurir">
                            @endif
                        </div>

                        @if ($item->shipping_type == 'on_send')
                        <div class="flex flex-col gap-[3.39px]">
                            <label for="" class="text-[13.54px]">No Resi</label>
                            <input type="text" id="shipping_code_input_{{ $item->id }}" class="rounded-[10px] border border-[#969EBA] px-[13.54px] py-[6.77px]" placeholder="Masukan No Resi" value="{{ $item->shipping_code }}">
                        </div>
                        @endif

                    </div>
                </div>

            </div>
            <div class="py-[20.32px]">
                <div class="flex justify-between rounded-[10px] bg-[#E5E5E5] px-[13.54px] py-[6.77px]">
                    <div class="flex items-center gap-[2px]">
                        <h4 class="text-[12px] font-semibold">Total Harga</h4>
                        <p class="text-[12px]">({{ $item->product->product_name }})</p>
                    </div>
                    <div>
                        <h4 class="text-[12px] font-semibold">Rp{{ number_format($item->total_payment) }},-</h4>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                @if ($item->shipping_status == 'packing')
                <button onclick="all_order_{{ $item->id }}.showModal()" class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white">
                    Konfirmasi Pengiriman
                </button>
                <dialog id="all_order_{{ $item->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2" id="button-close-all-{{ $item->id }}">✕</button>
                        </form>
                        <div>
                            <h3 class="mb-5 text-center text-2xl font-semibold">Apakah Anda yakin?</h3>

                            <form action="{{ url('/admin/order') }}" method="post">
                                {{-- <input type="text"> --}}
                                @csrf
                                @if ($item->shipping_type == 'on_send')
                                <input type="text" class="hidden" name="shipping" id="shipping_code_value_{{ $item->id }}">
                                @endif
                                @if ($item->shipping_type == 'on_location')
                                <input type="text" class="hidden" name="shipping" value="on_location">
                                @endif
                                <input type="text" name="user_payment_id" value="{{ $item->id }}" class="hidden" readonly>
                                <div class="flex justify-center gap-5">
                                    <button class="btn btn-primary btn-outline w-32" type="button" onclick="document.getElementById('button-close-all-{{ $item->id }}').click()">Tidak</button>
                                    <button class="btn btn-primary w-32" type="submit">Ya</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </dialog>
                @endif
                @if ($item->shipping_status == 'deliver')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-semibold text-primary">Sedang dikirim</p>
                @endif

                @if ($item->shipping_status == 'completed')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-semibold text-primary">Selesai</p>
                @endif

            </div>
        </div>
        {{-- end: Card --}}
        @endforeach

        {{ $orders->links() }}
    </div>
</section>


<script>
    @foreach($orders as $item)
    @if($item -> shipping_type == 'on_send')
    $('#shipping_code_input_{{ $item->id }}').on('change', (event) => {
        $('#shipping_code_value_{{ $item->id }}').val(event.target.value)
    })
    @endif
    @endforeach
</script>
@endsection