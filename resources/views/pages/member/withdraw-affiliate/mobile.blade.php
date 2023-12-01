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
                    <button onclick="modal_mobile_exchange_balance.showModal()" class="btn w-[100%] bg-primary font-semibold text-white">Tukar Saldo</button>
                    @include('components.member.modal-withdraw.mobile')
                </div>
            </div>
            <!-- <div class="w-full mt-5">
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
            </div> -->
        </div>
    </div>
    <div class="rounded-xl border p-[20.23px]">
        <h3 class="mb-[10px] text-[16.93px] font-semibold">Riwayat Saldo</h3>
        <div class="p-[10px]">
            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] justify-between w-full">
                    <button id="button-income-mobile" onclick="HandleTabMobile('income')" class="rounded-[10px] border bg-primary p-[7px_20px] text-[10px] text-white transition duration-300 hover:bg-primary hover:text-white">Uang
                        Masuk</button>
                    <button id="button-outcome-mobile" onclick="HandleTabMobile('outcome')" class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[10px] text-[#969EBA] transition duration-300 hover:bg-primary hover:text-white">Riwayat
                        Penukaran</button>
                </div>
            </div>
            {{-- Tab income --}}
            <div id="tab-income-mobile" class="mt-5 rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] overflow-x-auto">
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
            <div id="tab-outcome-mobile" class="mt-5 hidden rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] overflow-x-auto">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-[10px] text-center">
                                Tanggal
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                Kode Pencairan
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                Nominal
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                Status
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