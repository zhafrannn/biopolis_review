@extends('layouts.auth')

@section('content')
    <section class="mb-[27.92px]">
        <div class="mb-[27.57px] flex items-center justify-between">
            <div>
                <h3 class="text-[20.32px] font-semibold">Dashboard</h3>
            </div>
            <div>
                <select name="" id=""
                    class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                    <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                </select>

            </div>
        </div>


        <div class="grid grid-cols-2 gap-[20.32px]">
            {{-- start: Card --}}
            <div class="relative rounded-[12.7px] bg-white p-[20.32px] shadow-[0_3.3px_12.6px_rgba(0,0,0,0.15)]">
                {{-- if Component active remove hidden --}}
                <div class="absolute right-1/2 top-0 h-[4.23px] w-[283.6px] translate-x-1/2 rounded-b-[4.23px] bg-primary">
                </div>
                {{-- if Component active remove hidden --}}
                <h3 class="mb-[6.77px] text-[16.93px] font-medium">Total Pendapatan Penjualan</h3>
                <div class="mb-[11.61px] flex items-center justify-between">
                    <div>
                        <h2 class="text-[27.09px] font-semibold">Rp2.000.000</h2>
                        <div class="flex items-center">
                            <p class="text-[20.32px] text-primary">Rp0</p>
                            <img src="{{ asset('images/icons/arrow-up.svg') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="text-[20.32px] text-primary">+0%</p>
                    </div>
                </div>
                <a href="" class="text-right">
                    <p class="text-[13.54px] text-primary">Lihat Detail</p>
                </a>
            </div>
            {{-- end: Card --}}


            {{-- start: Card --}}
            <div class="relative rounded-[12.7px] bg-white p-[20.32px] shadow-[0_3.3px_12.6px_rgba(0,0,0,0.15)]">
                {{-- if Component active remove hidden --}}
                <div
                    class="absolute right-1/2 top-0 hidden h-[4.23px] w-[283.6px] translate-x-1/2 rounded-b-[4.23px] bg-primary">
                </div>
                {{-- if Component active remove hidden --}}
                <h3 class="mb-[6.77px] text-[16.93px] font-medium">Total Mitra Baru</h3>
                <div class="mb-[11.61px] flex items-center justify-between">
                    <div>
                        <h2 class="text-[27.09px] font-semibold">20 Mitra</h2>
                        <div class="flex items-center">
                            <p class="text-[20.32px] text-error">Rp0</p>
                            <img src="{{ asset('images/icons/arrow-down-red.svg') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="text-[20.32px] text-error">+0%</p>
                    </div>
                </div>
                <a href="" class="text-right">
                    <p class="text-[13.54px] text-primary">Lihat Detail</p>
                </a>
            </div>
            {{-- end: Card --}}


        </div>
    </section>

    <section class="mb-[29.39px] rounded-xl border p-[20.32px]">
        <h3 class="mb-[27.09px] text-[16.93px] font-semibold">Grafik Pendapatan</h3>
        <div>
            <canvas id="myChart"></canvas>
        </div>


    </section>

    <section class="rounded-xl border p-[20.32px]">
        <h3 class="text-[16.93px] font-semibold">Daftar Ranking Mitra</h3>
        <div class="p-[20.32px]">
            <div class="rounded-[12px] bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <table class="w-full">
                    <thead class="text-md font-semibold">
                        <tr class="border-b border-[#969EBA]">
                            <th class="p-[10px] text-left">Ranking</th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Nama Mitra</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Tanggal Bergabung</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Pembelian</p>
                                </div>
                            </th>
                            <th class="p-[10px]">
                                <div class="flex items-center gap-[2.66px]">
                                    <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                    <p>Total Poin</p>
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
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 4, // Mengatur ketebalan garis menjadi 4px
                    borderColor: '#20B15A'
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        font: {
                            family: 'Poppins',
                            size: 14, // Mengatur ukuran font menjadi 14px
                            weight: 600 // Mengatur berat jenis font menjadi bold (600)
                        }
                    },
                    legend: {
                        labels: {
                            font: {
                                family: 'Poppins',
                                size: 14, // Mengatur ukuran font legenda menjadi 14px
                                weight: 600 // Mengatur berat jenis font legenda menjadi bold (600)
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 14, // Mengatur ukuran font sumbu X menjadi 14px
                                weight: 600 // Mengatur berat jenis font sumbu X menjadi bold (600)
                            }
                        },
                        grid: {
                            color: 'transparent' // Mengatur warna garis sumbu X di belakang chart
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 14, // Mengatur ukuran font sumbu Y menjadi 14px
                                weight: 600 // Mengatur berat jenis font sumbu Y menjadi bold (600)
                            }
                        },
                        grid: {
                            color: 'transparent' // Mengatur warna garis sumbu Y di belakang chart
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
