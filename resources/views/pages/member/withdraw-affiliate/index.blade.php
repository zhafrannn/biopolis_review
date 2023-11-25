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
            <dialog id="modal_exchange_balance" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                    </form>
                    <div>
                        <h3 class="mb-5 text-xl font-semibold text-[#969EBA]">Nominal Penukaran Saldo</h3>
                        <form action="{{ url('/member/balance') }}" id="form-exchange" method="post">
                            @csrf
                            <div class="mb-5 flex flex-col gap-2">
                                <label for="" class="text-[16px] font-semibold">Nominal</label>
                                <p>Minimal penukaran Rp.100.000,-</p>
                                <input type="number" id="total_exchange_balance" name="total_exchange_balance" placeholder="0" class="input input-bordered w-full" />
                                <div class="">
                                    <small id="alert-error" class="hidden text-error"></small>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="btn btn-primary" id="button-submit" type="submit" disabled>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </dialog>
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
                                <p>Withdraw</p>
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
                        <td class="p-[10px]">-</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{-- End tab income --}}
    </div>
</section>

<!-- mobile -->
<section class="lg:hidden">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[20px] font-semibold">Laporan Saldo</h2>
        <div class="rounded-xl bg-white p-[5px]">
            <div class="relative z-0 rounded-xl px-4 pb-3 pt-6" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                    <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
                </div>
                <div class="mb-4">
                    <h3 class="text-[16px] font-semibold">Pendapatan Saya</h3>
                    <h4 class="mt-[10px] text-[16px] text-[#969EBA]">Total Saldo</h4>
                    <h3 class="text-[18px] font-semibold">{{ Auth::user()->user_wallet->current_balance }}</h3>
                </div>
                <div class="w-[100%]">
                    <button onclick="modal_mobile_exchange_balance.showModal()" class="btn h-16 w-[100%] bg-primary text-[20px] font-semibold text-white">Tukar Saldo</button>
                    <dialog id="modal_mobile_exchange_balance" class="modal">
                        <div class="modal-box">
                            <form method="dialog">
                                <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                            </form>
                            <div>
                                <h3 class="mb-5 text-xl font-semibold text-[#969EBA]">Nominal Penukaran Saldo</h3>
                                <form action="{{ url('/member/balance') }}" id="form-exchange" method="post">
                                    @csrf
                                    <div class="mb-5 flex flex-col gap-2">
                                        <label for="" class="text-[16px] font-semibold">Nominal</label>
                                        <p>Minimal penukaran Rp.100.000,-</p>
                                        <input type="number" id="total_mobile_exchange_balance" name="total_exchange_balance" placeholder="0" class="input input-bordered w-full" />
                                        <div class="">
                                            <small id="alert-error" class="hidden text-error"></small>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <button class="btn btn-primary" id="button-mobile-submit" type="submit" disabled>Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
            </div>
            <div class="w-full mt-5">
                <h2 class="mb-[10px] text-[20px] font-semibold">Rincian Saldo</h2>
                <div class=" w-[100%]">
                    <div class="flex justify-between">
                        <h4 class="mb-[10px] text-[15px] text-[#0A0A0B]">Order Affiliate</h4>
                        <h3 class="text-[15px] text-[#0A0A0B]">Rp2.000.000</h3>
                    </div>
                    <div class="flex justify-between">
                        <h4 class="mb-[10px] text-[15px] text-[#0A0A0B]">Referral</h4>
                        <h3 class="text-[15px] text-[#0A0A0B]">Rp100.000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[10px] text-[16.93px] font-semibold">Riwayat Saldo</h3>
        <div class="p-[10px]">
            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] justify-between w-full">
                    <button id="button-income" onclick="HandleTab('income')" class="rounded-[10px] border bg-primary p-[7px_20px] text-[10px] text-white transition duration-300 hover:bg-primary hover:text-white">Uang
                        Masuk</button>
                    <button id="button-outcome" onclick="HandleTab('outcome')" class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[10px] text-[#969EBA] transition duration-300 hover:bg-primary hover:text-white">Riwayat
                        Penukaran</button>
                </div>
            </div>
            {{-- Tab income --}}
            <div id="tab-income" class="mt-5 rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] overflow-x-auto">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-[10px] text-center">Jenis Transaksi</th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Nominal</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Total Saldo</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Tanggal</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Status</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>

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
                            <th class="p-[10px] text-[10px] text-center">Tanggal</th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Withdraw</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Nominal</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">

                                    <p>Status</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($user_balance)
                        @endif
                        @foreach ($user_balance as $item)
                        <tr class="border-b border-[#969EBA]">

                            <td class="p-[10px] text-[10px] text-center">{{ $item->created_at }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->withdraw_code }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->withdraw_total_balance }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->status }}</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- End tab income --}}
        </div>
    </div>
</section>
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