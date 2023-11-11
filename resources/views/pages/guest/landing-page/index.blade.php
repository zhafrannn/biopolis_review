@extends('layouts.guest')

@section('content')
    <section class="mb-[75px] flex items-center justify-between px-[120px] pt-[98px]">
        <div class="w-[633px]">
            <h1 class="mb-[10px] text-[50px] font-bold leading-[65px]"><span class="text-primary">Biopolis Propolis</span>
                Kunci Menuju
                Kesehatan yang
                Kuat dan
                Berkelanjutan
            </h1>
            <p class="mb-[37px] text-[21px] leading-[30px]">
                Propolis Biopolis merupakan solusi alami yang kuat dan efektif untuk meningkatkan daya tahan tubuh Anda
                secara signifikan.
            </p>
            <a href="" class="rounded-[16px] bg-primary px-[30px] py-[20px] text-white">Order Sekarang</a>
        </div>
        <div>
            <img src="{{ asset('images/img-hero.png') }}" alt="">
        </div>
    </section>

    <div class="px-[120px]">
        <section class="mb-[148px] flex items-center justify-between rounded-[30px] bg-[#D6FFDE] px-[30px] py-[23px]">
            <div class="flex items-center rounded-[16px] bg-primary px-[30px] py-[22px] text-white">
                <div class="flex h-[109px] w-[135px] flex-col items-center justify-center border-r-2 border-white">
                    <h2 class="text-[50px] font-bold leading-[65px]">4.9</h2>
                    <p class="text-[20px] leading-[30px]">10K rating</p>
                </div>
                <div class="flex h-[109px] flex-col items-center justify-center pl-[30px]">
                    <h2 class="text-[50px] font-bold leading-[65px]">80Jt+</h2>
                    <p class="text-[20px] leading-[30px]">Total sale</p>
                </div>
            </div>

            <div class="flex items-center gap-[32px]">
                <div class="w-[272px]">
                    <p class="text-[20px]">
                        Biopolis Telah dipercaya lebih dari <span class="font-bold">100+ pembeli</span> di Indonesia sejak
                        2022
                    </p>
                </div>
                <div class="flex items-center gap-[25px]">
                    <img src="{{ asset('images/guarantee.png') }}" alt="">
                    <img src="{{ asset('images/best-seller.png') }}" alt="">
                    <img src="{{ asset('images/premium-quality.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>

    <section class="mb-[130px] grid grid-cols-2">
        <div>
            <img src="{{ asset('images/promotion-babe-haikal.png') }}" class="h-[561px]" alt="">
        </div>
        <div class="flex flex-col items-center justify-center">
            <div>
                <h1 class="mb-[10px] text-[50px] font-bold leading-[77.77px]">Sehat Dengan <span class="text-primary">
                        Biopolis</span>
                </h1>
                <p class="mb-[37px] w-[554px] text-[20px]">Biopolis Propolis adalah Zat Resin yang dihasilkan oleh Lebah
                    dari bahan
                    dasar yang diambil dari pucuk
                    tumbuhan. Zat ini kaya akan kandungan Flavonoid yang sangat baik sebagai antioksidan, sehingga kerap
                    dimanfaatkan untuk mengatasi beberapa masalah kesehatan.”</p>
                <a href="" class="rounded-[16px] bg-primary px-[30px] py-[20px] text-white">Order Sekarang</a>
            </div>
        </div>
    </section>

    <section class="mb-[241px] flex h-[313px] flex-col items-center justify-center bg-[#F2FFF5]">
        <h1 class="text-[50px] font-bold">Propolis <span class="mb-[15px] text-primary">Premium</span> yang Terjamin</h1>
        <p class="px-[180px] text-center text-[20px]">Produk alami yang menggabungkan kekayaan propolis berkualitas tinggi
            dengan
            penelitian ilmiah terkini, menciptakan kunci menuju kesehatan yang kuat dan berkelanjutan bagi Anda. Anda dapat
            mengalami manfaat luar biasa dari propolis, yang telah terbukti meningkatkan daya tahan tubuh, melindungi tubuh
            dari infeksi, dan mendukung kesehatan umum.</p>
    </section>

    <section class="mb-[241px]" id="manfaat-section">
        <div class="flex h-[313px] flex-col items-center justify-center">
            <h1 class="text-[50px] font-bold">Manfaat <span class="mb-[15px] text-primary">Biopolis</span> untuk Kesehatan
            </h1>
            <p class="px-[180px] text-center text-[20px]">Satu ulasan dari Saudi Journal of Biological Science menunjukkan
                bahwa orang telah menggunakan senyawa ini sebagai obat sejak tahun 300 SM. Bahkan selama Perang Dunia II,
                senyawa ini digunakan untuk membantu penyembuhan luka. Menurut penelitian tersebut, manfaat senyawa ini
                datang dari beberapa sifatnya</p>
        </div>

        <div class="mb-[50px] px-[121px]">
            <img src="{{ asset('images/manfaat-biopolis.png') }}" alt="">
        </div>


        <div class="flex flex-col gap-[30px] px-[121px]">
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[32px] font-medium">
                        <h2>Tinggi Antioksidan</h2>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 transition-all duration-300 group-focus:rotate-90">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
                <div class="max-h-0 overflow-hidden transition-all duration-300 group-focus:max-h-[1000px]">
                    <div class="mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure temporibus optio, explicabo maxime
                            aliquam corrupti dolor rem sequi animi laboriosam ipsa voluptatem tempore soluta excepturi nihil
                            ea
                            inventore ad quasi!</p>
                    </div>
                </div>
            </div>
            {{-- start: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[32px] font-medium">
                        <h2>Proteksi Paru Paru</h2>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 transition-all duration-300 group-focus:rotate-90">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
                <div class="max-h-0 overflow-hidden transition-all duration-300 group-focus:max-h-[1000px]">
                    <div class="mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure temporibus optio, explicabo maxime
                            aliquam corrupti dolor rem sequi animi laboriosam ipsa voluptatem tempore soluta excepturi nihil
                            ea
                            inventore ad quasi!</p>
                    </div>
                </div>
            </div>
            {{-- start: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[32px] font-medium">
                        <h2>Mencegah Sel Kanker</h2>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 transition-all duration-300 group-focus:rotate-90">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
                <div class="max-h-0 overflow-hidden transition-all duration-300 group-focus:max-h-[1000px]">
                    <div class="mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure temporibus optio, explicabo maxime
                            aliquam corrupti dolor rem sequi animi laboriosam ipsa voluptatem tempore soluta excepturi nihil
                            ea
                            inventore ad quasi!</p>
                    </div>
                </div>
            </div>
            {{-- start: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[32px] font-medium">
                        <h2>Menurunkan Tekanan Darah</h2>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 transition-all duration-300 group-focus:rotate-90">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
                <div class="max-h-0 overflow-hidden transition-all duration-300 group-focus:max-h-[1000px]">
                    <div class="mt-5">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure temporibus optio, explicabo maxime
                            aliquam corrupti dolor rem sequi animi laboriosam ipsa voluptatem tempore soluta excepturi nihil
                            ea
                            inventore ad quasi!</p>
                    </div>
                </div>
            </div>
            {{-- start: Collapsible --}}

        </div>

    </section>

    <section class="px-[121px]" id="mitra-section">
        <h1 class="mb-[68px] text-center text-[50px] font-bold">Keuntungan Menjadi Mitra Biopolis</h1>

        <div class="grid grid-cols-3 gap-x-[48px] gap-y-[11px]">
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
            {{-- start: Card --}}
            <div class="px-[20px] py-[40px]">
                <img src="{{ asset('images/icons/pendapatan-penjualan.svg') }}" class="mb-[20px]" alt="">
                <h2 class="mb-[10px] text-[32px] font-semibold">Pendapatan Dari Penjualan</h2>
                <p class="text-[16px]">Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih
                    murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User</p>
            </div>
            {{-- end: Card --}}
        </div>
    </section>

    <section class="mb-[213px] px-[217px]">
        <div class="mb-[60px] flex justify-center">
            <img src="{{ asset('images/umroh.png') }}" alt="">
        </div>
        <div class="flex justify-center">
            <a href="" class="rounded-[16px] bg-primary px-[30px] py-[20px] text-white">Order Sekarang</a>
        </div>
    </section>

    <section>
        <h3 class="mb-[103.25px] text-center text-[50px] font-bold">Harga Khusus Mitra</h3>
        <div class="flex items-center justify-between px-[120px]">
            <div>
                <img src="{{ asset('images/img-hero.png') }}" alt="">
            </div>
            <div class="w-[633px]">
                <h1 class="mb-[10px] text-[50px] font-bold leading-[65px]"><span class="text-primary">Biopolis
                        Propolis</span>
                    Kunci Menuju
                    Kesehatan yang
                    Kuat dan
                    Berkelanjutan
                </h1>
                <p class="mb-[37px] text-[21px] leading-[30px]">
                    Propolis Biopolis merupakan solusi alami yang kuat dan efektif untuk meningkatkan daya tahan tubuh Anda
                    secara signifikan.
                </p>
                <a href="" class="rounded-[16px] bg-primary px-[30px] py-[20px] text-white">Order Sekarang</a>
            </div>
        </div>

    </section>
@endsection
