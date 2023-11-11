@extends('master-template.user')

@section('title')
Dashboard User qwe
@endsection
@include('master-template.modalprofile')
@section('body')
<section style="padding: 48px 40px">
    <h1 style="font-size:48px;font-weight:400;margin-bottom:28px">Hi, Vann! Selamat datang kembali.</h1>
    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 32px">
        <h3 style="font-family: Poppins;
            font-size: 24px;
            font-weight: 600;
            line-height: 36px;
            letter-spacing: 0em;
            text-align: left;
            ">
            Performa Affiliate Kamu</h3>
        <div class="d-flex align-items-center" style="width: 392px;
            height: 40px;
            padding: 8px 16px 8px 16px;
            border-radius: 12px;
            border: 1px;
            gap: 8px;
            border:1px solid #969EBA;
            color:#969EBA;
            ">
            <span style="font-family: Poppins;
                font-size: 15px;
                font-weight: 400;
                letter-spacing: 0em;
                text-align: center;
                ">30
                Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.92 8.94995L13.4 15.47C12.63 16.24 11.37 16.24 10.6 15.47L4.08002 8.94995" stroke="#969EBA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </div>
    </div>


    <div class="d-flex" style="gap: 25px;">
        <div style="width: 66.66%;">
            <div class="d-flex" style="gap: 24px;margin-bottom:24px">
                {{-- Card Point --}}
                <div class="card w-50" style="padding:16px 24px;border-color:#E5E5E5">
                    <h3 style="font-family: Poppins;
                        font-size: 24px;
                        font-weight: 400;
                        line-height: 36px;
                        letter-spacing: 0em;
                        text-align: left;
                        ">
                        Total Point</h3>
                    <div class="d-flex justify-content-between align-items-end">
                        <h2 style="font-family: Poppins;
                            font-size: 48px;
                            font-weight: 600;
                            ">
                            20 Poin</h2>
                        <h4 style="font-family: Poppins;
                            font-size: 24px;
                            font-weight: 400;
                            line-height: normal;
                            letter-spacing: 0em;
                            text-align: right;
                            color:#20B15A
                            ">
                            +100%</h4>
                    </div>
                    <div style="margin-bottom:8px" class="d-flex align-items-center">
                        <h3 style="font-family: Poppins;
                            font-size: 24px;
                            font-weight: 600;
                            line-height: 36px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #20B15A;
                            ">
                            10 Poin</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="vuesax/linear/arrow-up">
                                <g id="arrow-up">
                                    <path id="Vector" d="M18.07 9.57L12 3.5L5.92999 9.57" stroke="#20B15A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Vector_2" d="M12 20.4999V3.66992" stroke="#20B15A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </g>
                        </svg>

                    </div>
                    <div style="margin-bottom:8px" class="d-flex justify-content-between">
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                color:#969EBA
                                ">
                            Poin Affiliate</p>
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                color:#969EBA
                                ">
                            15</p>
                    </div>
                    <div style="margin-bottom:8px" class="d-flex justify-content-between">
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                color:#969EBA
                                ">
                            Poin Referal</p>
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                color:#969EBA
                                ">
                            5</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="" style="text-decoration: none">
                            <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                text-align: left;
                                color:#20B15A
                                ">
                                Lihat Detail
                            </p>
                        </a>
                    </div>
                </div>
                {{-- End Card Point --}}
                {{-- Card Produk --}}
                <div class="card w-50" style="padding:16px 24px;border-color:#E5E5E5;position: relative;">
                    <h3 style="font-family: Poppins;
                        font-size: 24px;
                        font-weight: 400;
                        line-height: 36px;
                        letter-spacing: 0em;
                        text-align: left;
                        ">
                        Total Produk</h3>
                    <div class="d-flex justify-content-between align-items-end">
                        <h2 style="font-family: Poppins;
                            font-size: 48px;
                            font-weight: 600;
                            ">
                            20 Produk</h2>
                        <h4 style="font-family: Poppins;
                            font-size: 24px;
                            font-weight: 400;
                            line-height: normal;
                            letter-spacing: 0em;
                            text-align: right;
                            color:#20B15A
                            ">
                            +100%</h4>
                    </div>

                    <div style="position: absolute;bottom:16px;right:16px">
                        <a href="" style="text-decoration: none">
                            <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                text-align: left;
                                color:#20B15A
                                ">
                                Lihat Detail
                            </p>
                        </a>
                    </div>
                </div>
                {{-- End Card Produk --}}
            </div>

            <div>
                <div class="card w-100" style="padding:16px 24px;border-color:#E5E5E5;position: relative;">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div style="width: 33.33%;">
            <div class="card w-100" style="padding:16px 24px;border-color:#E5E5E5;position: relative;">
                <div style="position: absolute;top:0;left:0;padding:0px 24px;width:100%;height:4px;">
                    <div style="width:100%;height:5px;background-color:#20B15A;border-radius:0px 0px 15px 15px "></div>
                </div>
                <div style="position: relative;width:100%;height:228px;border:1px solid red">
                    <img style="position: absolute;top:0" src="{{ asset('assets/image/icon/bg-green-file.svg') }}" alt="">
                    <img style="position: absolute;top:10px" src="{{ asset('assets/image/icon/bg-black-file.svg') }}" alt="">
                </div>


                {{-- Content --}}
                <div class="d-flex justify-content-between align-items-end">
                    <h3 style="font-family: Poppins;
                        font-size: 20px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        text-align: left;
                        ">
                        Pendapatan Komisi</h3>
                    <a href="" style="text-decoration: none">
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                text-align: left;
                                color:#20B15A
                                ">
                            Lihat Detail
                        </p>
                    </a>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 style="font-family: Poppins;
                            font-size: 20px;
                            font-weight: 400;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                            Pembelian Paket</h4>
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                text-align: left;
                                color:#969EBA">
                            23 Oktober 2023</p>
                    </div>
                    <h4 style="font-family: Poppins;
                            font-size: 20px;
                            font-weight: 400;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                        Rp.20.000</h4>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 style="font-family: Poppins;
                            font-size: 20px;
                            font-weight: 400;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                            Refferal</h4>
                        <p style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 24px;
                                letter-spacing: 0em;
                                text-align: left;
                                color:#969EBA">
                            23 Oktober 2023</p>
                    </div>
                    <h4 style="font-family: Poppins;
                            font-size: 20px;
                            font-weight: 400;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                        Rp.20.000</h4>

                </div>
                <div>
                    <button style="height:68px;width:100%" class="btn btn-success w-full">
                        Cairkan
                    </button>
                </div>
                {{-- End Content --}}
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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