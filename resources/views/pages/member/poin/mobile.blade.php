<section class="lg:hidden">
    <div class="mb-[27.92px]">
        <h2 class="mb-[19.95px] text-[20px] font-semibold bg-white">Laporan Poin</h2>
        <div class="relative rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
            </div>
            <div class="mb-4">
                <div class="flex justify-between">
                    <h3 class="text-[16px] font-semibold">Poin Saya</h3>
                </div>
                <h4 class="mt-[10px] text-[16px] text-[#969EBA]">Total Poin</h4>
                <h3 class="text-[18px] font-semibold">{{ Auth::user()->user_wallet->current_point }} Poin</h3>
            </div>
            <div class="w-[100%]">
                @include('components.member.modal-poin.mobile')
            </div>
        </div>
        <div class="w-full mt-5">
            <h2 class="mb-[10px] text-[16px] font-semibold">Rincian Poin</h2>
            <div class="flex justify-between">
                <h4 class="mb-[10px] text-[14px] text-[#969EBA]">Order Affiliate</h4>
                <h3 class="text-[16px]">{{ $res['point_repeat_order'] }} Poin</h3>
            </div>
            <div class="flex justify-between">
                <h4 class="mb-[10px] text-[14px] text-[#969EBA]">Register Affiliate</h4>
                <h3 class="text-[16px]">{{ $res['point_register'] }} Poin</h3>
            </div>

            <div class="absolute right-[30px] top-[160px] z-[100]">
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 8V13" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.9945 16H12.0035" stroke="#969EBA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <div tabindex="0" class="dropdown-content z-[1] h-[150px] w-[308px] overflow-hidden rounded-xl border bg-base-100 p-6 shadow-md">
                        <p class="text-[14px] font-semibold text-primary">
                            Informasi Penukaran Poin
                        </p>
                        <div class="flex">
                            <div class="w-4/12 text-[14px] font-semibold text-black">
                                <p>500 Poin</p>
                                <p>1000 Poin</p>
                                <p>2000 Poin</p>
                                <p>3000 Poin</p>
                            </div>
                            <div class="w-8/12 text-[14px]">
                                <p>Rp4.000.000</p>
                                <p>Rp10.000.000</p>
                                <p>Motor + Rp5.000.000</p>
                                <p>Umroh + Rp10.000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-xl border p-[10px]">
        <h3 class="mb-[10px] text-[18px] font-semibold">Riwayat Poin</h3>
        <div class="p-[10px]">

            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-center flex h-[33.86px] justify-around w-full">
                    <button class="rounded-[10px] border bg-primary text-white p-[7px_20px] text-[10px]" onclick="HandleMobileTab('income')" id="button-mobile-income">Uang
                        Masuk</button>
                    <button class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[10px] text-[#969EBA]" onclick="HandleMobileTab('outcome')" id="button-mobile-outcome">Riwayat
                        Penukaran</button>
                </div>
            </div>

            <!-- Tab Income -->
            <div id="tab-mobile-income" class="mt-5 rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-[10px] text-center">Jenis Transaksi</th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center">
                                    <p>Nominal</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center">
                                    <p>Total Poin</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center">
                                    <p>Tanggal</p>
                                </div>
                            </th>
                            <th class="p-[10px] text-[10px] text-center pl-5">
                                <div class="flex items-center">
                                    <p>Status</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($res['payment_user_use'] as $item)
                        <tr class="border-b border-[#969EBA]">
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">-</td>
                            <td class="p-[10px] text-[10px] text-center">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>15 Point</p>
                                @else
                                <p>5 Point</p>
                                @endif
                            </td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->date }}</td>
                            <td class="p-[10px] text-[10px] text-center">
                                <?php $product_code = explode('-', $item->payment_code); ?>
                                @if ($product_code[0] == 'P00')
                                <p>Pendaftaran Member</p>
                                @else
                                <p>Affiliate Pembelian Product </p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tab Outcome -->
            <div id="tab-mobile-outcome" class="hidden mt-5 rounded-xl bg-white p-[10px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)] overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">

                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Tanggal</p>
                                </div>
                            </th>

                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Point</p>
                                </div>
                            </th>

                            <th class="p-[10px] text-[10px] text-center">
                                <div class="flex items-center gap-[2.66px]">
                                    <p>Keterangan</p>
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
                        @foreach (Auth::user()->user_withdraw_point as $item)
                        <tr class="border-b border-[#969EBA]">
                            <td class="w-56 p-[10px] text-[10px] text-center">{{ $item->created_at }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->point_exchange->point }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->point_exchange->description }}</td>
                            <td class="p-[10px] text-[10px] text-center">{{ $item->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<script>
    const HandleMobileTab = (type) => {
        if (type == "income") {
            $('#tab-mobile-outcome').addClass('hidden')
            $('#button-mobile-outcome').removeClass('bg-primary')
            $('#button-mobile-outcome').removeClass('text-white')

            $('#button-mobile-income').addClass('text-white')
            $('#tab-mobile-income').removeClass('hidden')
            $('#button-mobile-income').addClass('bg-primary')
        }

        if (type == "outcome") {
            $('#tab-mobile-income').addClass('hidden')
            $('#button-mobile-income').removeClass('bg-primary')
            $('#button-mobile-income').removeClass('text-white')
            $('#button-mobile-income').addClass('text-[#969EBA]')

            $('#button-mobile-outcome').removeClass('bg-white')
            $('#button-mobile-outcome').addClass('bg-primary')
            $('#button-mobile-outcome').addClass('text-white')
            $('#tab-mobile-outcome').removeClass('hidden')
        }
    }
</script>