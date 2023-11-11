@extends('layouts.auth-member')

@section('title')
Saldo
@endsection

@section('content')
<div class="p-5">
    <h1 class="text-[40px] mb-7">Hi, Vann! Selamat datang kembali. </h1>
    <div class="flex justify-between items-center">
        <h3 class="text-[20px] font-semibold">Performa Affiliate Kamu</h3>
        <div class="flex ">
            <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA] text-center">
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
            </select>
        </div>
    </div>
    <div class="flex mt-6">
        <div class="w-8/12">
            <div class="w-[100%] flex gap-5">
                <div class="rounded-xl w-[50%] border border-[#E5E5E5] p-[16px_24px_24px_24px]">
                    <p class="text-[20px]">Total Poin</p>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <p class="text-[40px] font-semibold">20 Poin</p>
                            <p class="text-[24px] text-primary font-semibold">10 Poin</p>
                        </div>
                        <p class="text-[24px] text-primary">+100%</p>
                    </div>
                    <div class="flex justify-between mt-2">
                        <p class="text-[16px] text-[#969EBA] ">Poin Affiliate</p>
                        <p class="text-[16px] text-[#969EBA] ">15</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-[16px] text-[#969EBA] ">Poin Referral</p>
                        <p class="text-[16px] text-[#969EBA] ">15</p>
                    </div>
                    <a href="" class="flex justify-end text-[16px] text-primary items-end mt-3">Lihat Detail</a>
                </div>
                <div class="rounded-xl w-[50%] border border-[#E5E5E5] p-[16px_24px_24px_24px]">
                    <p class="text-[20px]">Total Produk</p>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <p class="text-[40px] font-semibold">20 Produk</p>
                            <p class="text-[24px] text-primary font-semibold">10 Produk</p>
                        </div>
                        <p class="text-[24px] text-primary">+100%</p>
                    </div>

                    <a href="" class="flex justify-end text-[16px] text-primary items-end pt-[66px]">Lihat Detail</a>
                </div>
            </div>

            <div class="w-[100%] mt-4">
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

                <div class="rounded-xl px-6 pb-6 pt-6 relative z-0" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                    <div class="absolute top-0 left-0 py-0 px-6 w-[100%] h-[5px]">
                        <div class="w-[100%] h-1 bg-primary border-primary rounded-[0px_0px_16px_16px]"></div>
                    </div>
                    <div class="relative inline-block w-[100%] h-[228px]">
                        <img src="{{ asset('images/icons/bg-green-file.svg') }}" alt="" class="absolute top-0">
                        <img src="{{ asset('images/icons/bg-black-file.svg') }}" alt="" class="absolute top-[10px]">
                    </div>

                    <div class="absolute top-8 p-5">
                        <h3 class="text-[20px] font-semibold text-white text-left">Komisi Affiliate</h3>
                        <h3 class="text-[36px] font-semibold text-white text-left mt-14">Rp2.000.000</h3>
                        <div class="flex justify-between w-[320px]">
                            <p href="" class="text-[20px] text-primary">Rp1.000.000</p>
                            <p href="" class="text-[20px] text-primary">+100%</p>
                        </div>
                    </div>

                    <div class="flex justify-between mb-4">
                        <h3 class="font-semibold text-[16px]">Pendapatan Komisi</h3>
                        <a href="" class="text-[16px] text-primary">Lihat Semua</a>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <p class="font-semibold text-[16px]">Pembelian Paket</p>
                            <p class="text-[14px] text-[#color: #969EBA]">23 Oktober 2023</p>
                        </div>
                        <a href="">Rp100.000</a>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <p class="font-semibold text-[16px]">Pengguna Baru</p>
                            <p class="text-[14px] text-[#color: #969EBA]">23 Oktober 2023</p>
                        </div>
                        <a href="">Rp100.000</a>
                    </div>
                    <button class="btn btn-primary flex justify-items-center w-[100%]">Cairkan</button>
                </div>
                <div class="rounded-xl p-6 border border-[#E5E5E5] mt-4 gap-6">
                    <h1 class="text-[22px] font-semibold">Ajak Temanmu dan Dapatkan Komisinya</h1>
                    <p class="text-end">Kode Referal Kamu</p>
                    <div class="flex justify-end items-center">
                        <p class="text-end text-[40px] font-semibold">24A17XU</p>
                        <img src="{{ asset('images/icons/document-copy.svg') }}" alt="" class="w-6 h-6">
                    </div>
                    <a href="" class="font-[16px] text-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>






<script src=" https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                '19 Oktokber 2023',
                '20 Oktokber 2023',
                '21 Oktokber 2023',
                '22 Oktokber 2023',
                '23 Oktokber 2023',
                '24 Oktokber 2023',

            ],
            datasets: [{
                label: '# of Votes',
                data: [12000, 19000, 3000, 5000, 2000, 3000],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection