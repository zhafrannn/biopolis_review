@extends('layouts.auth-member')

@section('title')
Balance
@endsection

@section('content')
<section class="hidden lg:block mb-[27.92px]">
    <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Saldo</h2>
    <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <div class="flex items-center">
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[27px] font-semibold">Saldo Saya</h2>
                <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Total Saldo</h4>
                <h3 class="text-[40px]">Rp.{{ number_format(Auth::user()->user_wallet->current_balance) }},-</h3>
            </div>
            <div class="flex w-2/12 items-center justify-center">
                <div class="h-[118px] w-[1px] border"></div>
            </div>
            <div class="w-5/12">
                <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Saldo</h2>
                <div class="flex w-[100%]">
                    <div class="grid-flow">
                        <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Order Affiliate</h4>
                        <h3 class="text-[33px]">Rp0</h3>
                    </div>
                    <div class="">
                        <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Referral</h4>
                        <h3 class="text-[33px]">Rp0</h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-[100%]">
            <button onclick="modal_exchange_balance.showModal()" class="btn h-16 w-[100%] bg-primary text-[20px] font-semibold text-white">Tukar Saldo</button>
            @include('components.member.modal-withdraw.index')
        </div>
    </div>
</section>

<section class="hidden lg:block rounded-xl border p-[20.23px]">
    <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Saldo</h3>
    <div class="p-[20.20px]">
        <div class="flex items-center justify-between gap-[14px]">
            <div class="items-centera flex h-[33.86px] justify-between">
                <button id="button-income" onclick="HandleTab('income')" class="rounded-[10px] border bg-primary p-[7px_20px] text-[12.7px] text-white transition duration-300 hover:bg-primary hover:text-white">Uang
                    Masuk</button>
                <button id="button-outcome" onclick="HandleTab('outcome')" class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA] transition duration-300 hover:bg-primary hover:text-white">Riwayat
                    Penukaran</button>
            </div>
        </div>
        {{-- Tab income --}}
        <div id="tab-income" class="mt-5 min-h-[300px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
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
        {{-- End tab income --}}
        {{-- Tab income --}}
        <div id="tab-outcome" class="mt-5 hidden min-h-[300px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <table class="w-full">
                <thead class="text-md font-semibold">
                    <tr class="border-b border-[#969EBA]">
                        <th class="p-[10px] text-left">Tanggal</th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Kode Pencairan</p>
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
                                <p>Status</p>
                            </div>
                        </th>


                        <th class="p-[10px]">

                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($user_balance)
                    @endif
                    @foreach ($user_balance as $item)
                    <tr class="border-b border-[#969EBA]">

                        <td class="p-[10px]">{{ $item->created_at }}</td>
                        <td class="p-[10px]">{{ $item->withdraw_code }}</td>
                        <td class="p-[10px]">{{ $item->withdraw_total_balance }}</td>
                        <td class="p-[10px]">{{ $item->status }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{-- End tab income --}}
    </div>
</section>

<!-- mobile -->
@include('pages.member.withdraw-affiliate.mobile')
<!-- end mobile -->

<script>
    const HandleTab = (type) => {
        if (type == "income") {
            $('#tab-outcome').addClass('hidden')
            $('#button-outcome').removeClass('bg-primary')
            $('#button-outcome').removeClass('text-white')

            $('#button-income').addClass('text-white')
            $('#tab-income').removeClass('hidden')
            $('#button-income').addClass('bg-primary')
        }

        if (type == "outcome") {
            $('#tab-income').addClass('hidden')
            $('#button-income').removeClass('bg-primary')
            $('#button-income').removeClass('text-white')
            $('#button-income').addClass('text-[#969EBA]')

            $('#button-outcome').removeClass('bg-white')
            $('#button-outcome').addClass('bg-primary')
            $('#button-outcome').addClass('text-white')
            $('#tab-outcome').removeClass('hidden')
        }
    }
</script>

<script>
    let currentBalanceUser = parseInt("{{ Auth::user()->user_wallet->current_balance }}");

    $('#total_exchange_balance').on('change', (e) => {

        let valueExchange = parseInt($('#total_exchange_balance').val());

        if (currentBalanceUser <= 99999) {
            $('#alert-error').text('Saldo anda tidak mencukupi');
            $('#alert-error').removeClass('hidden');
            $('#button-submit').prop('disabled', true);
            return;
        }

        if (e.target.value <= 99999) {
            $('#alert-error').text('Minimal penukaran saldo Rp.100.000,-');
            $('#alert-error').removeClass('hidden');
            $('#button-submit').prop('disabled', true);
            return;
        }


        $('#button-submit').removeAttr('disabled')
    });

    let currentMobileBalanceUser = parseInt("{{ Auth::user()->user_wallet->current_balance }}");

    $('#total_mobile_exchange_balance').on('change', (e) => {

        let valueExchange = parseInt($('#total_mobile_exchange_balance').val());

        if (currentMobileBalanceUser <= 99999) {
            $('#alert-error').text('Saldo anda tidak mencukupi');
            $('#alert-error').removeClass('hidden');
            $('#button-mobile-submit').prop('disabled', true);
            return;
        }

        if (e.target.value <= 99999) {
            $('#alert-error').text('Minimal penukaran saldo Rp.100.000,-');
            $('#alert-error').removeClass('hidden');
            $('#button-mobile-submit').prop('disabled', true);
            return;
        }


        $('#button-mobile-submit').removeAttr('disabled')
    });
</script>
@endsection