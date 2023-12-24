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
                    <h3 class="text-[18px] font-semibold">
                        Rp.{{ number_format(Auth::user()->user_wallet->current_balance) }},-</h3>
                </div>
                <div class="w-[100%]">
                    <button onclick="modal_mobile_exchange_balance.showModal()"
                        class="btn w-[100%] bg-primary font-semibold text-white">Tukar Saldo</button>
                    @include('components.member.modal-withdraw.mobile')
                </div>
            </div>
            <div class="mt-5 w-full">
                <h2 class="mb-[10px] text-[20px] font-semibold">Rincian Saldo</h2>
                <div class="w-[100%]">
                    <div class="flex justify-between">
                        <h4 class="mb-[10px] text-[15px] text-[#0A0A0B]">Order Affiliate</h4>
                        <h3 class="text-[15px] text-[#0A0A0B]">
                            Rp{{ number_format($data['my_balance_from_user_repeat_order']) }},-</h3>
                    </div>
                    <div class="flex justify-between">
                        <h4 class="mb-[10px] text-[15px] text-[#0A0A0B]">User Register</h4>
                        <h3 class="text-[15px] text-[#0A0A0B]">
                            Rp{{ number_format($data['my_balance_from_user_register_use_my_referal']) }},-</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[10px] text-[16.93px] font-semibold">Riwayat Saldo</h3>
        <div class="p-[10px]">
            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] w-full justify-between">
                    <button id="button-income-mobile" onclick="HandleTabMobile('income')"
                        class="rounded-[10px] border bg-primary p-[7px_20px] text-[10px] text-white transition duration-300 hover:bg-primary hover:text-white">Uang
                        Masuk</button>
                    <button id="button-outcome-mobile" onclick="HandleTabMobile('outcome')"
                        class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[10px] text-[#969EBA] transition duration-300 hover:bg-primary hover:text-white">Riwayat
                        Penukaran</button>
                </div>
            </div>
            {{-- Tab income --}}
            <div id="tab-income-mobile"
                class="mt-5 overflow-x-auto rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <table class="w-full">

                    <tbody>
                        @foreach ($data['income_data'] as $item)
                            <tr class="border-b border-[#969EBA80]">

                                <td class="p-[10px]">
                                    <p>{{ $item['date'] }}</p>
                                    <p>

                                        {{ $item['description'] }}
                                    </p>
                                    <div class="flex justify-end">
                                        <div class="min-w-[50px] rounded-full bg-primary p-1 text-center text-white">
                                            + Rp.{{ number_format($item['balance']) }},-
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- End tab income --}}
            {{-- Tab income --}}
            <div id="tab-outcome-mobile"
                class="mt-5 hidden overflow-x-auto rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <table class="w-full">

                    <tbody>
                        @foreach (Auth::user()->user_withdraw_balance as $item)
                            <tr class="border-b border-[#969EBA]">
                                <td class="p-[10px]">

                                    <p class="text-sm">Kode Pencairan: {{ $item->withdraw_code }}</p>
                                    <p>{{ $item->created_at }}</p>
                                    <p>Rp.{{ number_format($item->withdraw_total_balance) }},-</p>
                                    <p>{{ $item->description }}</p>
                                    <div class="flex justify-end">
                                        @if ($item->status == 'completed')
                                            <div
                                                class="rounded-[5px] bg-primary bg-opacity-20 px-[6.67px] py-[3.39px] text-primary">
                                                <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                                            </div>
                                        @endif
                                        @if ($item->status == 'pending')
                                            <div
                                                class="rounded-[5px] bg-[#FF8345] bg-opacity-20 px-[6.67px] py-[3.39px] text-[#FF8345]">
                                                <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- End tab income --}}
        </div>
    </div>
</section>

<script>
    const HandleTabMobile = (type) => {
        if (type == "income") {
            $('#tab-outcome-mobile').addClass('hidden')
            $('#button-outcome-mobile').removeClass('bg-primary')
            $('#button-outcome-mobile').removeClass('text-white')

            $('#button-income-mobile').addClass('text-white')
            $('#tab-income-mobile').removeClass('hidden')
            $('#button-income-mobile').addClass('bg-primary')
        }

        if (type == "outcome") {
            $('#tab-income-mobile').addClass('hidden')
            $('#button-income-mobile').removeClass('bg-primary')
            $('#button-income-mobile').removeClass('text-white')
            $('#button-income-mobile').addClass('text-[#969EBA]')

            $('#button-outcome-mobile').removeClass('bg-white')
            $('#button-outcome-mobile').addClass('bg-primary')
            $('#button-outcome-mobile').addClass('text-white')
            $('#tab-outcome-mobile').removeClass('hidden')
        }
    }
</script>

<script>
    let currentMobileBalanceUser = parseInt("{{ Auth::user()->user_wallet->current_balance }}");

    $('#total_mobile_exchange_balance').on('change', (e) => {

        let valueExchangeMobile = parseInt($('#total_mobile_exchange_balance').val());

        if (currentMobileBalanceUser <= 99999) {
            $('#alert-error-mobile').text('Saldo anda tidak mencukupi');
            $('#alert-error-mobile').removeClass('hidden');
            $('#button-mobile-submit').prop('disabled', true);
            return;
        }

        if (e.target.value <= 99999) {
            $('#alert-error-mobile').text('Minimal penukaran saldo Rp.100.000,-');
            $('#alert-error-mobile').removeClass('hidden');
            $('#button-mobile-submit').prop('disabled', true);
            return;
        }


        $('#button-mobile-submit').removeAttr('disabled')
    });
</script>
