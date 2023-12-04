@extends('layouts.auth-member')

@section('title')
    My Point
@endsection

@section('content')
    <section class="mb-[27.92px] hidden lg:block">
        <h2 class="mb-[19.95px] text-[27.09px] font-semibold">Laporan Poin</h2>
        <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="relative mb-2 grid grid-cols-4">
                <div class="border-r-2 px-5">
                    <h2 class="mb-[7px] text-[27px] font-semibold">Poin Saya</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Current Poin</h4>
                    <h3 class="text-[40px]">{{ Auth::user()->user_wallet->current_point }} Poin</h3>
                </div>

                <div class="relative border-r-2 px-5">
                    <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Poin</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Point buy Product</h4>
                    <h3 class="text-[33px]">{{ $data['my_point_from_buy_a_product'] }} Poin</h3>

                </div>

                <div class="relative border-r-2 px-5">
                    <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Poin</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Order Affiliate</h4>
                    <h3 class="text-[33px]">{{ $data['my_point_from_user_repeat_order'] }} Poin</h3>

                </div>

                <div class="relative px-5">
                    <h2 class="mb-[7px] text-[20px] font-semibold">Rincian Poin</h2>
                    <h4 class="mb-[10px] text-[20.32px] text-[#969EBA]">Register Affiliate</h4>
                    <h3 class="text-[33px]">{{ $data['my_point_from_user_register_use_my_referal'] }} Poin</h3>
                </div>

                <div class="absolute right-0 top-0">
                    <div class="dropdown-end dropdown">
                        <label tabindex="0" class="cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                                    stroke="#969EBA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 8V13" stroke="#969EBA" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.9945 16H12.0035" stroke="#969EBA" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </label>
                        <div tabindex="0"
                            class="dropdown-content z-[1] h-[150px] w-[308px] overflow-hidden rounded-xl border bg-base-100 p-6 shadow-md">
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
            <div class="w-[100%]">
                @include('components.member.modal-poin.index')
            </div>
        </div>
    </section>

    <section class="hidden rounded-xl border p-[20.23px] lg:block">
        <h3 class="mb-[34px] text-[16.93px] font-semibold">Riwayat Poin</h3>
        <div class="p-[20.20px]">

            <div class="flex items-center justify-between gap-[14px]">
                <div class="items-centera flex h-[33.86px] justify-between">
                    <button id="button-income" onclick="HandleTab('income')"
                        class="rounded-[10px] border bg-primary p-[7px_20px] text-[12.7px] text-white transition duration-300 hover:bg-primary hover:text-white">Poin
                        Masuk</button>
                    <button id="button-outcome" onclick="HandleTab('outcome')"
                        class="ml-5 rounded-[10px] border bg-white p-[7px_20px] text-[12.7px] text-[#969EBA] transition duration-300 hover:bg-primary hover:text-white">Riwayat
                        Penukaran</button>
                </div>
            </div>
            {{-- Income --}}
            <div id="tab-income"
                class="mt-5 min-h-[300px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b-2 border-[#969EBA]">

                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Keterangan</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Poin</p>
                                </div>
                            </th>

                            <th class="p-[10px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($data['income_data'] as $item)
                            <tr class="border-b border-[#969EBA80]">
                                <td class="w-56 p-[10px]">{{ $item['date'] }}</td>
                                <td class="p-[10px]">{{ $item['description'] }}</td>
                                <td class="p-[10px]">
                                    <div class="w-20 rounded-full bg-primary p-1 text-center text-white">
                                        +{{ $item['point'] }} Poin
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- End Income --}}
            {{-- Outcome --}}
            <div id="tab-outcome"
                class="mt-5 hidden min-h-[300px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b-2 border-[#969EBA]">
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal</p>
                                </div>
                            </th>

                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Point</p>
                                </div>
                            </th>

                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Keterangan</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Status</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach (Auth::user()->user_withdraw_point as $item)
                            <tr class="border-b border-[#969EBA80]">
                                <td class="w-56 p-[10px]">{{ $item->created_at }}</td>
                                <td class="p-[10px]">{{ $item->point_exchange->point }}</td>
                                <td class="p-[10px]">{{ $item->point_exchange->description }}</td>
                                <td class="p-[10px]">{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- End Outcome --}}
        </div>
    </section>

    <!-- mobile -->
    @include('pages.member.poin.mobile')
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
@endsection
