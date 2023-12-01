<div class="bg-white lg:hidden">
    <h1 class="mb-7 text-[20px]">Hi, {{ Auth::user()->name }}! Selamat datang kembali. </h1>
    <!-- <div class="flex flex-col items-start">
        <h3 class="text-[14px] font-semibold">Performa Affiliate Kamu</h3>
    </div> -->
    <div class="mt-6">
        <div class="w-full">
            <div class="mb-6 w-[100%]">
                <div class="relative z-0 rounded-xl px-6 pb-6 pt-6" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                    <div class="absolute left-0 top-0 h-[5px] w-[100%] px-6 py-0">
                        <div class="h-1 w-[100%] rounded-[0px_0px_16px_16px] border-primary bg-primary"></div>
                    </div>
                    <div class="mb-4 flex justify-between">
                        <h3 class="text-[16px] font-semibold">Total Saldo</h3>
                        <a href="{{ url('/member/balance') }}" class="text-[16px] text-primary">Lihat Semua</a>
                    </div>
                    <div class="mb-2">
                        <p class="text-[20px] font-semibold">
                            Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</p>
                        <p class="text-[#color: #969EBA] text-[14px]">
                            Rp{{ number_format(Auth::user()->user_wallet->current_balance) }}</p>
                    </div>
                    <a href="{{ url('/member/balance') }}" class="btn btn-primary flex w-full justify-items-center text-white">Cairkan</a>
                </div>
            </div>

            <div class="w-full">
                <div class="flex w-[100%] gap-2">
                    <div class="w-[100%] rounded-xl border border-[#E5E5E5] p-[0px_8px_8px_8px]">
                        <p class="text-[16px]">Total Poin</p>
                        <div class="mt-4">
                            <div>
                                <p class="text-[20px] font-semibold">{{ $data['refferal_point']['current_point'] }}
                                    Poin
                            </div>
                            <div class="mt-2 flex justify-between">
                                <p class="text-[11px] text-[#969EBA]">Poin Affiliate</p>
                                <p class="text-[11px] text-[#969EBA]">
                                    {{ $data['refferal_point']['total_point'] - $data['point_user_buy_product'] }}
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-[11px] text-[#969EBA]">Total Referral</p>
                                <p class="text-[11px] text-[#969EBA]">{{ $data['refferal_point']['total_refferal'] }}
                                </p>
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
                    <p class="mt-4 text-end text-[12px]">Kode Referal Kamu</p>

                    <div class="relative flex justify-end">
                        <button onclick="CopyToClipboardMobile()" class="flex items-center justify-end">
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

<script>
    let value = `http://localhost:8000/register?referral_code={{ Auth::user()->kode_referal }}`;

    const CopyToClipboardMobile = () => {
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