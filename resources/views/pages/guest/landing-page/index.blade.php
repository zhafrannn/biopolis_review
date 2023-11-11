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

    <section class="mb-[191.63px]">
        <h3 class="mb-[103.25px] text-center text-[50px] font-bold">Harga Khusus Mitra</h3>
        <div class="flex items-center justify-between px-[120px]">
            <div>
                <img src="{{ asset('images/img-hero.png') }}" alt="">
            </div>
            <div class="w-[633px]">
                <h1 class="mb-[10px] text-[50px] font-bold leading-[65px]">Propolis<span class="text-primary">Biopolis
                    </span>
                </h1>
                <p class="mb-[50px] max-w-[521px] text-[21px] leading-[30px]">
                    Dengan Modal Hanya Rp 1.950.000 anda sudah bisa menjadi Mitra Sekaligus Pengusaha dibidang Kesehatan dan
                    berkesempatan untuk Umrah
                </p>
                <h1 class="text-[36px] font-bold leading-[65px]">
                    <span class="text-primary">Harga Khusus Mitra</span>
                </h1>
                <div class="relative max-w-[236px]">
                    <div class="absolute left-1/2 top-1/2 h-[2px] w-full -translate-x-1/2 -translate-y-1/2 bg-red-500">
                    </div>
                    <p class="max-w-[236px] text-[36px] font-semibold text-[#969EBA]">Rp 3.000.000</p>
                </div>

                <h3 class="mb-[50px] text-[50px] font-semibold text-[#0A0A0B]">Rp 1.950.000</h3>

                <h3 class="mb-[29px] text-[36px] font-bold">12 Pcs Biopolis + Akun Kemitraan</h3>
                <div class="flex items-center gap-[28px]">

                    <a href=""
                        class="rounded-[16px] border border-primary bg-primary px-[30px] py-[20px] text-white">Order
                        Sekarang</a>

                    <a href=""
                        class="flex items-center justify-center gap-5 rounded-[16px] border border-primary bg-white px-[30px] py-[20px] text-primary">
                        <p>
                            Pelajari
                            Keuntungan
                        </p>
                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="vuesax/linear/document-download">
                                <g id="document-download">
                                    <path id="Vector" d="M9.375 11.958V18.208L11.4583 16.1247" stroke="#20B15A"
                                        stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Vector_2" d="M9.37508 18.2083L7.29175 16.125" stroke="#20B15A"
                                        stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Vector_3"
                                        d="M22.9166 10.9163V16.1247C22.9166 21.333 20.8333 23.4163 15.6249 23.4163H9.37492C4.16659 23.4163 2.08325 21.333 2.08325 16.1247V9.87467C2.08325 4.66634 4.16659 2.58301 9.37492 2.58301H14.5833"
                                        stroke="#20B15A" stroke-width="1.5625" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path id="Vector_4"
                                        d="M22.9166 10.9163H18.7499C15.6249 10.9163 14.5833 9.87467 14.5833 6.74967V2.58301L22.9166 10.9163Z"
                                        stroke="#20B15A" stroke-width="1.5625" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </g>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="mb-[241px] px-[121px]">
        <div class="flex h-[200px] w-full items-center justify-between rounded-[30px] bg-[#D6FFDE] px-[30px] py-[44px]">
            {{-- start: Item --}}
            <div class="flex items-start gap-[15px]">
                <svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.83337 24.792H39.375" stroke="#0A0A0B" stroke-width="4.375" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M17.5 48.125H23.3333" stroke="#0A0A0B" stroke-width="4.375" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M30.625 48.125H42.2917" stroke="#0A0A0B" stroke-width="4.375" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M64.1667 32.1705V46.9872C64.1667 57.2247 61.5709 59.7913 51.2167 59.7913H18.7834C8.42921 59.7913 5.83337 57.2247 5.83337 46.9872V23.0122C5.83337 12.7747 8.42921 10.208 18.7834 10.208H39.375"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M48.125 17.4997L52.5 21.8747L64.1667 10.208" stroke="#0A0A0B" stroke-width="4.375"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div>
                    <h4 class="mb-[5px] text-[24px] font-bold">
                        Pembayaran Aman
                    </h4>
                    <p class="max-w-[263px] text-[16px] font-medium">Menggunakan system payment gateway pembayaran jadi
                        lebih mudah dan aman</p>
                </div>
            </div>
            {{-- end: item --}}
            {{-- start: Item --}}
            <div class="flex items-start gap-[15px]">
                <svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M67.0831 52.2382C67.1415 54.4257 66.5581 56.4965 65.5081 58.2757C64.9248 59.3257 64.1373 60.2883 63.2623 61.0758C61.2498 62.9424 58.5956 64.0799 55.6498 64.1674C51.3914 64.2549 47.629 62.0675 45.5581 58.7133C44.4498 56.9925 43.779 54.9217 43.7498 52.7342C43.6623 49.0592 45.2956 45.7341 47.9206 43.5466C49.904 41.9132 52.4123 40.8924 55.154 40.8341C61.5998 40.6883 66.9373 45.7924 67.0831 52.2382Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M50.8665 52.5879L53.8123 55.3878L59.9081 49.4961" stroke="#0A0A0B" stroke-width="4.375"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.24609 21.7021L35.0002 36.6063L60.5794 21.7896" stroke="#0A0A0B" stroke-width="4.375"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M35.0001 63.0304V36.5762" stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M63.0292 26.7465V43.2549C63.0292 43.4008 63.0293 43.5173 63.0001 43.6631C60.9584 41.884 58.3334 40.834 55.4167 40.834C52.6751 40.834 50.1376 41.7966 48.1251 43.4007C45.4417 45.5299 43.7501 48.8257 43.7501 52.5007C43.7501 54.6882 44.3625 56.759 45.4417 58.509C45.7042 58.9757 46.0251 59.4132 46.3751 59.8216L41.0376 62.7674C37.7126 64.6341 32.2876 64.6341 28.9626 62.7674L13.3876 54.134C9.85839 52.1799 6.97095 47.2799 6.97095 43.2549V26.7465C6.97095 22.7215 9.85839 17.8215 13.3876 15.8674L28.9626 7.23398C32.2876 5.36732 37.7126 5.36732 41.0376 7.23398L56.6126 15.8674C60.1418 17.8215 63.0292 22.7215 63.0292 26.7465Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div>
                    <h4 class="mb-[5px] text-[24px] font-bold">
                        Garansi
                    </h4>
                    <p class="max-w-[263px] text-[16px] font-medium">
                        Apabila terjadi kerusakan (pecah) pada produk, akan
                        kami berikan garansi ganti baru
                    </p>
                </div>
            </div>
            {{-- end: item --}}

            {{-- start: Item --}}
            <div class="flex items-start gap-[15px]">
                <svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M43.75 5.83301V34.9997C43.75 38.208 41.125 40.833 37.9167 40.833H5.83337V22.2247C7.96254 24.7622 11.2293 26.3372 14.846 26.2497C17.7918 26.1913 20.4459 25.0538 22.4292 23.158C23.3334 22.3997 24.0918 21.4371 24.6751 20.3871C25.7251 18.608 26.3084 16.5079 26.25 14.3204C26.1625 10.9079 24.6459 7.90384 22.2834 5.83301H43.75Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M64.1667 40.833V49.583C64.1667 54.4247 60.2584 58.333 55.4167 58.333H52.5C52.5 55.1247 49.875 52.4997 46.6667 52.4997C43.4584 52.4997 40.8334 55.1247 40.8334 58.333H29.1667C29.1667 55.1247 26.5417 52.4997 23.3334 52.4997C20.125 52.4997 17.5 55.1247 17.5 58.333H14.5834C9.74171 58.333 5.83337 54.4247 5.83337 49.583V40.833H37.9167C41.125 40.833 43.75 38.208 43.75 34.9997V14.583H49.1168C51.2168 14.583 53.1418 15.7205 54.1918 17.5289L59.1791 26.2497H55.4167C53.8125 26.2497 52.5 27.5622 52.5 29.1663V37.9163C52.5 39.5205 53.8125 40.833 55.4167 40.833H64.1667Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M23.3333 64.1667C26.555 64.1667 29.1667 61.555 29.1667 58.3333C29.1667 55.1117 26.555 52.5 23.3333 52.5C20.1117 52.5 17.5 55.1117 17.5 58.3333C17.5 61.555 20.1117 64.1667 23.3333 64.1667Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M46.6667 64.1667C49.8884 64.1667 52.5 61.555 52.5 58.3333C52.5 55.1117 49.8884 52.5 46.6667 52.5C43.445 52.5 40.8334 55.1117 40.8334 58.3333C40.8334 61.555 43.445 64.1667 46.6667 64.1667Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M64.1667 35V40.8333H55.4167C53.8125 40.8333 52.5 39.5208 52.5 37.9167V29.1667C52.5 27.5625 53.8125 26.25 55.4167 26.25H59.1791L64.1667 35Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M26.2501 14.5827C26.2501 18.0827 24.7043 21.2035 22.2835 23.3327C20.2126 25.141 17.5292 26.2493 14.5834 26.2493C8.13758 26.2493 2.91675 21.0285 2.91675 14.5827C2.91675 10.9077 4.60841 7.61186 7.29175 5.4827C9.30425 3.87853 11.8417 2.91602 14.5834 2.91602C21.0292 2.91602 26.2501 8.13685 26.2501 14.5827Z"
                        stroke="#0A0A0B" stroke-width="4.375" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15.3126 10.9365V15.3115L11.6667 17.499" stroke="#0A0A0B" stroke-width="4.375"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <div>
                    <h4 class="mb-[5px] text-[24px] font-bold">
                        24/7 Siap Order
                    </h4>
                    <p class="max-w-[263px] text-[16px] font-medium">Di Jam berapapun kami siap menerima setiap orderan dan
                        melayani Anda</p>
                </div>
            </div>
            {{-- end: item --}}


        </div>
    </section>


    <section class="mb-[241px]">
        <h1 class="mb-[15px] text-center text-[50px] font-bold text-black">Apa Kata Mereka</h1>
        <h3 class="mb-[55px] text-center text-[20px]">Ini kata mereka yang merasakan manfaat dari biopolis.</h3>
        {{-- start: Slider --}}
        <div class="h-[591px] bg-[#F5F5F5] px-[121px] py-[86px]">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {{-- start: Card --}}
                        <div class="h-[371px] w-[561px] rounded-[30px] bg-white p-[40px]">
                            <h3 class="text-[28px] font-semibold">
                                Rudi ahong
                            </h3>
                            <p class="mb-[18px] text-[20px] text-[#969EBA]">45 Tahun</p>
                            <p class="mb-[18px] max-w-[400px] text-[16px] text-black">Saya seornag pekerja keras dan sering
                                terpapara
                                lingkungan
                                yang tidak bersih. Sejak
                                menggunakan Propolis Biopolis, saya merasakan lebih aman dari resiko infeksi. Ini adalah
                                tambahan penting bagi rutinitas sehat saya</p>
                            {{-- start: rating star --}}
                            <div class="flex gap-2">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                            </div>
                            {{-- end: rating star --}}
                        </div>
                        {{-- end: Card --}}


                    </div>
                    <div class="swiper-slide">
                        {{-- start: Card --}}
                        <div class="h-[371px] w-[561px] rounded-[30px] bg-white p-[40px]">
                            <h3 class="text-[28px] font-semibold">
                                Nina
                            </h3>
                            <p class="mb-[18px] text-[20px] text-[#969EBA]">30 Tahun</p>
                            <p class="mb-[18px] max-w-[400px] text-[16px] text-black">Saya selalu mencari cara alami untuk
                                meningkatkan kekebalan tubuh, terutama selama musim flu. Propolis Biopolis adalah solusi
                                yang sempurna. Rasanya enak dan memberi rasa ketenangan.</p>
                            {{-- start: rating star --}}
                            <div class="flex gap-2">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                            </div>
                            {{-- end: rating star --}}
                        </div>
                        {{-- end: Card --}}
                    </div>

                    <div class="swiper-slide">
                        {{-- start: Card --}}
                        <div class="h-[371px] w-[561px] rounded-[30px] bg-white p-[40px]">
                            <h3 class="text-[28px] font-semibold">
                                Siti
                            </h3>
                            <p class="mb-[18px] text-[20px] text-[#969EBA]">38 Tahun</p>
                            <p class="mb-[18px] max-w-[400px] text-[16px] text-black">Saya sudah menggunakan Propolis
                                Biopolis selama beberapa bulan, dan saya merasakan perubahan yang signifikan pada kesehatan
                                saya. Mantap rekomended banget ini Propolis Biopolis</p>
                            {{-- start: rating star --}}
                            <div class="flex gap-2">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.54894 0.927051C8.8483 0.00574017 10.1517 0.00573993 10.4511 0.927051L11.8574 5.25532C11.9913 5.66734 12.3752 5.9463 12.8085 5.9463H17.3595C18.3282 5.9463 18.731 7.18592 17.9473 7.75532L14.2654 10.4303C13.9149 10.685 13.7683 11.1364 13.9021 11.5484L15.3085 15.8766C15.6078 16.798 14.5533 17.5641 13.7696 16.9947L10.0878 14.3197C9.7373 14.065 9.2627 14.065 8.91221 14.3197L5.23037 16.9947C4.44665 17.5641 3.39217 16.798 3.69153 15.8766L5.09787 11.5484C5.23174 11.1364 5.08508 10.685 4.7346 10.4303L1.05275 7.75532C0.269035 7.18592 0.67181 5.9463 1.64053 5.9463H6.19155C6.62477 5.9463 7.00873 5.66734 7.1426 5.25532L8.54894 0.927051Z"
                                        fill="#FFCC00" />
                                </svg>
                            </div>
                            {{-- end: rating star --}}
                        </div>
                        {{-- end: Card --}}
                    </div>


                </div>

            </div>
        </div>
        {{-- end: Slider --}}
    </section>

    <section class="mb-[246px]">
        <h1 class="mb-[15px] text-center text-[50px] font-bold text-black">FaQ</h1>

        <h4 class="mb-[50px] text-center text-[20px] text-black">Pertanyaan yang sering ditanyakan</h4>

        <div class="flex flex-col gap-[24px] px-[121px]">
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Apa yang dimaksud dengan Biopolis Propolis?</h2>
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
            {{-- end: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Bagaimana cara menggunakan Biopolis Propolis?</h2>
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
            {{-- end: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Dapatkag Biopolis Propolis digunakan oleh semua orang?</h2>
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
            {{-- end: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Darimana Biopolis Propolis diperoleh?</h2>
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
            {{-- end: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Bagaimana menjadi mitra biopolis?</h2>
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
            {{-- end: Collapsible --}}
            {{-- start: Collapsible --}}
            <div class="group rounded-[16px] border border-[#D9D9D9] px-[56px] py-[28px]" tabindex="0">
                <div class="flex items-center justify-between">
                    <div class="text-[24px] font-semibold">
                        <h2>Apakah Biopolis Propolis memiliki efek samping?</h2>
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
            {{-- end: Collapsible --}}
        </div>

    </section>

    <section class="mb-[246px]">
        <div class="mb-[90px] flex justify-center">
            <img src="{{ asset('images/biopolis.png') }}" alt="">
        </div>
        <div class="mb-[88px]">
            <h1 class="text-center text-[50px] font-bold text-black">Pesan Sekarang!</h1>
            <h1 class="text-center text-[50px] font-bold text-primary">Dan Nikmati Manfaat serta Keuntungannya!</h1>

        </div>
        <div class="flex justify-center">
            <div class="flex items-center gap-[28px]">

                <a href=""
                    class="rounded-[16px] border border-primary bg-primary px-[30px] py-[20px] text-white">Order
                    Sekarang</a>

                <a href=""
                    class="flex items-center justify-center gap-5 rounded-[16px] border border-primary bg-white px-[30px] py-[20px] text-primary">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.05004 24.033C9.80004 25.083 11.9 25.6663 14 25.6663C20.4167 25.6663 25.6667 20.4163 25.6667 13.9997C25.6667 7.58301 20.4167 2.33301 14 2.33301C7.58337 2.33301 2.33337 7.58301 2.33337 13.9997C2.33337 16.0997 2.91671 18.083 3.85004 19.833L2.84722 23.69C2.62005 24.5638 3.42879 25.3534 4.29686 25.1053L8.05004 24.033Z"
                            stroke="#20B15A" stroke-width="1.75" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M19.25 17.3232C19.25 17.5122 19.2079 17.7065 19.1186 17.8955C19.0292 18.0845 18.9135 18.263 18.761 18.431C18.5034 18.7145 18.2195 18.9192 17.8987 19.0505C17.5833 19.1817 17.2415 19.25 16.8734 19.25C16.3371 19.25 15.764 19.124 15.1594 18.8667C14.5547 18.6095 13.9501 18.263 13.3507 17.8273C12.746 17.3863 12.1729 16.898 11.6261 16.3572C11.0845 15.8112 10.5955 15.239 10.1591 14.6405C9.72797 14.042 9.38095 13.4435 9.12857 12.8503C8.87619 12.2518 8.75 11.6795 8.75 11.1335C8.75 10.7765 8.81309 10.4353 8.93928 10.1203C9.06547 9.8 9.26527 9.506 9.54394 9.2435C9.88045 8.91275 10.2485 8.75 10.6376 8.75C10.7848 8.75 10.932 8.7815 11.0635 8.8445C11.2002 8.9075 11.3211 9.002 11.4157 9.1385L12.6356 10.8553C12.7302 10.9865 12.7986 11.1072 12.8459 11.2227C12.8932 11.333 12.9195 11.4432 12.9195 11.543C12.9195 11.669 12.8827 11.795 12.8091 11.9157C12.7407 12.0365 12.6408 12.1625 12.5146 12.2885L12.115 12.7032C12.0572 12.761 12.0309 12.8292 12.0309 12.9132C12.0309 12.9552 12.0362 12.992 12.0467 13.034C12.0625 13.076 12.0782 13.1075 12.0888 13.139C12.1834 13.3122 12.3464 13.538 12.5777 13.811C12.8143 14.084 13.0667 14.3622 13.3401 14.6405C13.6241 14.9187 13.8975 15.176 14.1761 15.4122C14.4495 15.6432 14.6756 15.8007 14.8544 15.8952C14.8807 15.9057 14.9122 15.9215 14.949 15.9372C14.9911 15.953 15.0332 15.9582 15.0805 15.9582C15.1699 15.9582 15.2382 15.9267 15.2961 15.869L15.6957 15.4752C15.8271 15.344 15.9533 15.2442 16.0742 15.1812C16.1952 15.1077 16.3161 15.071 16.4475 15.071C16.5474 15.071 16.6526 15.092 16.7683 15.1392C16.884 15.1865 17.0049 15.2547 17.1363 15.344L18.8767 16.5777C19.0134 16.6722 19.108 16.7825 19.1659 16.9137C19.2185 17.045 19.25 17.1762 19.25 17.3232Z"
                            stroke="#20B15A" stroke-width="1.75" stroke-miterlimit="10" />
                    </svg>
                    <p>
                        Whatsapp Mimin
                    </p>

                </a>

            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2.2,
            spaceBetween: 15,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
