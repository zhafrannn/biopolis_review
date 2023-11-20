@extends('layouts.auth-member')

@section('title')
Dashboard | Biopolis Propolis
@endsection

@section('content')
<div class="p-5 hidden lg:block">
    <h1 class="mb-7 text-[40px]">Hi, {{ Auth::user()->name }}! Selamat datang kembali. </h1>
    <!-- <div class="flex items-center justify-between">
        <h3 class="text-[20px] font-semibold">Performa Affiliate Kamu</h3>
        <div class="flex">
            <select name="" id="select-graphic" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-center text-[12.7px] text-[#969EBA]">
                <option value="week">Mingguan</option>
                <option value="month">Bulanan</option>
                <option value="year">Tahunan</option>
            </select>
        </div>
    </div> -->
    <div class="mt-6 flex">
        <div class="w-8/12">
            <div class="flex w-[100%] gap-5">
                <div class="w-[50%] rounded-xl border border-[#E5E5E5] p-[16px_24px_24px_24px]">
                    <p class="text-[20px]">Total Poin</p>
                    <div class="mt-4 flex items-center justify-between">
                        <div>
                            <p class="text-[40px] font-semibold">{{ $data['refferal_point']['current_point'] }} Poin
                            </p>
                            {{-- <p class="text-[24px] font-semibold text-primary">10 Poin</p> --}}
                        </div>
                        <p class="text-[24px] text-primary">+100%</p>
                    </div>
                    <div class="mt-2 flex justify-between">
                        <p class="text-[16px] text-[#969EBA]">Poin Affiliate</p>
                        <p class="text-[16px] text-[#969EBA]">
                            {{ $data['refferal_point']['total_point'] - $data['point_user_buy_product'] }}
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-[16px] text-[#969EBA]">Total Referral</p>
                        <p class="text-[16px] text-[#969EBA]">{{ $data['refferal_point']['total_refferal'] }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-[16px] text-[#969EBA]">Poin Pembelian Produk</p>
                        <p class="text-[16px] text-[#969EBA]">{{ $data['point_user_buy_product'] }}
                        </p>
                    </div>

                    <a href="{{ url('/member/point') }}" class="mt-3 flex items-end justify-end text-[16px] text-primary">
                        Lihat Detail
                    </a>
                </div>
                <div class="relative w-[50%] rounded-xl border border-[#E5E5E5] p-[16px_24px_24px_24px]">
                    <p class="text-[20px]">Total Produk</p>
                    <div class="mt-4 flex items-center justify-between">
                        <div>
                            <p class="text-[40px] font-semibold">{{ $data['user_total_buy_packet'] }}</p>
                            <p class="text-[24px] font-semibold text-primary" id="total-packet-season">
                                {{ $data['user_total_packet']['weekly'] }} Paket
                            </p>
                        </div>

                    </div>

                    <a href="{{ url('/member/info-produk') }}" class="absolute bottom-5 right-5 z-50 text-[16px] text-primary">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <div class="mt-4 w-[100%]">
                <section class="mb-[29.39px] rounded-xl border p-[20.32px]">
                    <h3 class="mb-[27.09px] text-[16.93px] font-semibold">Grafik Pendapatan</h3>
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </section>
            </div>
        </div>
        <div class="w-4/12">
            <div class="w-[100%] pl-6">

                <div class="relative z-0 rounded-xl px-6 pb-6 pt-6" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                    <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                        <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
                    </div>
                    <div class="relative inline-block h-[228px] w-[100%]">
                        <img src="{{ asset('images/icons/bg-green-file.svg') }}" alt="" class="absolute top-0">
                        <img src="{{ asset('images/icons/bg-black-file.svg') }}" alt="" class="absolute top-[10px]">
                    </div>

                    <div class="absolute top-8 p-5">
                        <h3 class="text-left text-[20px] font-semibold text-white">Komisi Affiliate</h3>
                        <h3 class="mt-14 text-left text-[36px] font-semibold text-white">
                            Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</h3>
                        <div class="flex w-[320px] justify-between">
                            <p href="" class="text-[20px] text-primary">
                                Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</p>

                        </div>
                    </div>

                    <div class="mb-4 flex justify-between">
                        <h3 class="text-[16px] font-semibold">Pendapatan Komisi</h3>
                        <a href="" class="text-[16px] text-primary">Lihat Semua</a>
                    </div>
                    <div class="mb-2 flex items-center justify-between">
                        <div>
                            <p class="text-[16px] font-semibold">Pembelian Paket</p>
                            <p class="text-[#color: #969EBA] text-[14px]">23 Oktober 2023</p>
                        </div>
                        <a href="">Rp100.000</a>
                    </div>
                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <p class="text-[16px] font-semibold">Pengguna Baru</p>
                            <p class="text-[#color: #969EBA] text-[14px]">23 Oktober 2023</p>
                        </div>
                        <a href="">Rp100.000</a>
                    </div>
                    <a href="{{ url('/withdraw-affiliate') }}" class="btn btn-primary flex w-full justify-items-center text-white">Cairkan</a>
                </div>
                <div class="mt-4 gap-6 rounded-xl border border-[#E5E5E5] p-6">
                    <h1 class="text-[22px] font-semibold">Ajak Temanmu dan Dapatkan Komisinya</h1>
                    <p class="text-end">Kode Referal Kamu</p>

                    <div class="relative flex justify-end">
                        <button onclick="CopyToClipboard()" class="flex items-center justify-end">
                            <p class="text-end text-[40px] font-semibold">{{ Auth::user()->kode_referal }}</p>
                            <img src="{{ asset('images/icons/document-copy.svg') }}" alt="" class="h-5 w-5">
                        </button>
                    </div>
                    <a href="{{ url('/member/referral') }}" class="font-[16px] text-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="lg:hidden bg-white">
    <h1 class="mb-7 text-[20px]">Hi, {{ Auth::user()->name }}! Selamat datang kembali. </h1>
    <!-- <div class="flex flex-col items-start   ">
        <h3 class="text-[14px] font-semibold">Performa Affiliate Kamu</h3>
        <div class="flex w-full">
            <select name="" id="select-graphic" class="h-[33.86px] w-full rounded-[10.16px] border bg-white text-center text-[12.7px] text-[#969EBA]">
                <option value="week">Mingguan</option>
                <option value="month">Bulanan</option>
                <option value="year">Tahunan</option>
            </select>
        </div>
    </div> -->
    <div class="mt-6">
        <div class="w-full">
            <div class="w-[100%] mb-6">
                <div class="relative z-0 rounded-xl px-6 pb-6 pt-6" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                    <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                        <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
                    </div>
                    <div class="mb-4 flex justify-between">
                        <h3 class="text-[16px] font-semibold">Total Saldo</h3>
                        <a href="" class="text-[16px] text-primary">Lihat Semua</a>
                    </div>
                    <div class="mb-2">
                        <p class="text-[20px] font-semibold">Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</p>
                        <p class="text-[#color: #969EBA] text-[14px]">Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</p>
                    </div>
                    <a href="{{ url('/withdraw-affiliate') }}" class="btn btn-primary flex w-full justify-items-center text-white">Cairkan</a>
                </div>
            </div>

            <div class="w-full">
                <div class="flex w-[100%] gap-2">
                    <div class="w-[100%] rounded-xl border border-[#E5E5E5] p-[0px_8px_8px_8px]">
                        <p class="text-[16px]">Total Poin</p>
                        <div class="mt-4">
                            <div>
                                <p class="text-[20px] font-semibold">{{ $data['refferal_point']['current_point'] }} Poin
                            </div>
                            <div class="mt-2 flex justify-between">
                                <p class="text-[11px] text-[#969EBA]">Poin Affiliate</p>
                                <p class="text-[11px] text-[#969EBA]">
                                    {{ $data['refferal_point']['total_point'] - $data['point_user_buy_product'] }}
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-[11px] text-[#969EBA]">Total Referral</p>
                                <p class="text-[11px] text-[#969EBA]">{{ $data['refferal_point']['total_refferal'] }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-[11px] text-[#969EBA]">Poin Pembelian Produk</p>
                                <p class="text-[11px] text-[#969EBA]">{{ $data['point_user_buy_product'] }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('/member/point') }}" class="mt-3 flex items-end justify-end text-[11px] text-primary">
                            Lihat Detail
                        </a>
                    </div>
                    <div class="relative w-[100%] rounded-xl border border-[#E5E5E5] p-[0px_8px_8px_8px]">
                        <p class="text-[16px]">Total Produk Dibeli</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <p class="text-[20px] font-semibold">{{ $data['user_total_buy_packet'] }}</p>
                                <p class="text-[11px] font-semibold text-[#969EBA]" id="total-packet-season">
                                    {{ $data['user_total_packet']['weekly'] }} Paket
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('/member/info-produk') }}" class="mt-[54px] flex items-end justify-end text-[11px] text-primary">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- <div class="mt-4 w-[100%]">
                    <section class="mb-[20px] rounded-xl border p-3">
                        <h3 class="mb-[27.09px] text-[16.93px] font-semibold">Grafik Pendapatan</h3>
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </section>
                </div> -->
                <div class="mt-2 gap-6 rounded-xl border border-[#E5E5E5] p-3">
                    <h1 class="text-[16px] font-semibold">Ajak Temanmu dan Dapatkan Komisinya</h1>
                    <p class="text-[12px] text-end mt-4">Kode Referal Kamu</p>

                    <div class="relative flex justify-end">
                        <button onclick="CopyToClipboard()" class="flex items-center justify-end">
                            <p class="text-end text-[20px] font-semibold">{{ Auth::user()->kode_referal }}</p>
                            <img src="{{ asset('images/icons/document-copy.svg') }}" alt="" class="h-5 w-5">
                        </button>
                    </div>
                    <a href="{{ url('/member/referral') }}" class="font-[11px] text-primary">Lihat Detail</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end mobile -->
{{-- Javascript --}}
<script src=" https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const selectAffiliate = document.getElementById('select-graphic')
</script>

<script>
    let total_paket_weekly = {
        {
            $data['user_total_packet']['weekly']
        }
    };
    let total_paket_monthly = {
        {
            $data['user_total_packet']['monthly']
        }
    };
    let total_paket_yearly = {
        {
            $data['user_total_packet']['yearly']
        }
    };
    console.log(total_paket_weekly);
    selectAffiliate.addEventListener('change', () => {
        if (selectAffiliate.value == "week") {
            $('#total-packet-season').text(`${total_paket_weekly} Paket`)
        }
        if (selectAffiliate.value == "month") {
            $('#total-packet-season').text(`${total_paket_monthly} Paket`)
        }
        if (selectAffiliate.value == "year") {
            $('#total-packet-season').text(`${total_paket_yearly} Paket`)
        }
    })
</script>

<script>
    let value = `http://localhost:8000/register?referral_code={{ Auth::user()->kode_referal }}`;

    const CopyToClipboard = () => {
        navigator.clipboard.writeText(value)
            .then(() => {
                console.log('Teks berhasil disalin ke clipboard:', value);
                // Atau tambahkan logika atau tindakan lain setelah berhasil menyalin ke clipboard
            })
            .catch(err => {
                console.error('Gagal menyalin teks ke clipboard: ', err);
                // Handle kesalahan saat menyalin ke clipboard
            });
    };
</script>

<script>
    const ctx = document.getElementById('myChart');

    const myChart = new Chart(ctx, {
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
    selectAffiliate.addEventListener('change', () => {
        myChart.destroy()
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Green', 'Purple', 'Orange'],
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
    })
</script>
@endsection