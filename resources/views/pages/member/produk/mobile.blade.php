<div class="z-10 flex h-full w-full items-center lg:hidden">
    <div class="grid grid-cols-2 place-content-center">
        <?php $multiple = 2;
        $no = 0; ?>
        @foreach ($product as $item)
        @if ($item->product_code != 'P00')
        <div class="m-3 h-[310px] w-[150px] rounded-xl bg-base-100 shadow-md">
            <figure>
                <img class="h-[150px] w-[150px] rounded-[12px_12px_0px_0px] bg-[#D9D9D9] object-cover" src="{{ asset('/images/biopolis.png') }}" alt="Shoes" />
            </figure>

            <div class="p-2">
                <h2 class="card-title text-[14px]">Paket Biopolis</h2>
                <p class="text-[12px] text-primary">+{{ $item->point }} poin</p>
                <p class="mt-2 text-[14px] font-semibold text-[#0A0A0B]">Rp{{ number_format($item->price) }}
                </p>
                <div class="flex">
                    <?php $discount = explode(' ', $item->product_name); ?>
                    <span class="text-[12px] text-[#969EBA] line-through">Rp{{ $multiple * 1950000 }}
                        <?php $multiple = $multiple + 2; ?></span>
                    <span class="ml-1 text-[12px] text-[#E30613]">35%</span>
                </div>
                <div class="card-actions mt-4 items-center justify-center">
                    <button onclick="HandleMobileTab('tab-mobile-{{ $item->product_code }}')" class="w-full rounded-lg bg-primary p-2 text-[12px] text-white" type="button">
                        Beli Sekarang
                </div>
            </div>
        </div>

        <div id="tab-mobile-{{ $item->product_code }}" class="tab-product-mobile fixed -bottom-[1000px] left-0 z-[900] h-screen w-screen bg-black bg-opacity-30 transition-all duration-300">
            <div class="relative h-full bg-white">
                {{-- Close --}}
                <div class="absolute right-5 top-5">
                    <button onclick="HandleMobileCloseTab('tab-mobile-{{ $item->product_code }}')">Close</button>
                </div>
                <div class="h-full w-screen overflow-y-auto">
                    <h1 class="mb-[26px] ml-3 text-[16px] font-semibold">Checkout</h1>
                    <div class="flex flex-col justify-start p-3">
                        <div class="mb w-full rounded-2xl border bg-white p-[12px] leading-[20px]">
                            <p class="mb-6 text-[16px] font-semibold text-[#0A0A0B]">Alamat Pengiriman</p>
                            <p class="text-[14px] font-semibold text-[#0A0A0B]">{{ Auth::user()->name }}</p>
                            <p class="text-[14px] text-[#969EBA]">{{ Auth::user()->user_biodata->no_whatsapp }}
                            </p>
                            <div class="mb-4">
                                <?php $kota = explode('-', Auth::user()->user_biodata->kota);
                                $provinsi = explode('-', Auth::user()->user_biodata->provinsi); ?>
                                <p class="text-[14px] text-[#969EBA]">
                                    Provinsi : {{ $provinsi[1] }}
                                </p>
                                <p class="text-[14px] text-[#969EBA]">
                                    Kota : {{ $kota[1] }}
                                </p>
                                <p class="text-[14px] text-[#969EBA]">
                                    {{ Auth::user()->user_biodata->alamat_lengkap }}
                                </p>
                            </div>
                            <div class="mb-6 mt-6 h-[1px] w-full border-[5px]"></div>
                            <p class="text-[14px] font-semibold text-[#0A0A0B]">Biopolis</p>
                            <p class="text-[12px] text-[#0A0A0B]">Kota Bandung</p>
                            <div class="mt-6">
                                <div class="flex">
                                    <img src="{{ asset('images/biopolis.png') }}" class="h-[50px] w-[50px] rounded-[5px] bg-[#D9D9D9] object-cover">
                                    <div class="ml-4 flex flex-col justify-around">
                                        <p class="text-[14px] font-semibold text-[#0A0A0B]">Paket Biopolis</p>
                                        <div>
                                            <span class="text-[13px] text-[#969EBA] line-through">Rp{{ number_format($item->price + $item->price*100/35) }}</span>
                                            <span class="text-[13px] text-[#20B15A]">Rp{{ number_format($item->price) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <p class="mb-2 text-[12px] font-semibold text-[#0A0A0B]">Tipe Pemesanan</p>
                                    <div class="flex gap-6">
                                        <button onclick="HandleOnSendMobile('on_send')" class="user-send-mobile btn btn-primary text-[12px]">
                                            Dikirim
                                        </button>
                                        <button onclick="HandleOnLocationMobile('on_location')" class="user-location-mobile btn btn-primary btn-outline text-[12px]">
                                            Ambil ditempat
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4 mt-4 h-[1px] w-full border-[5px]"></div>
                                <div class="w-full bg-white">
                                    <p class="text-[14px] font-semibold text-[#0A0A0B]">Ringkasan Belanja</p>
                                    <div class="mt-6 flex justify-between">
                                        <p class="text-[14px] text-[#0A0A0B]">Total Belanja</p>
                                        <p class="text-[14px] text-[#0A0A0B]">
                                            Rp{{ number_format($item->price) }}</p>
                                    </div>
                                    <!-- <div class="flex justify-between">
                                        <p class="text-[14px] text-[#0A0A0B]">Total Ongkir</p>
                                        <p class="text-[14px] text-[#0A0A0B]">Rp0</p>
                                    </div> -->
                                    <div class="mb-4 mt-4 h-[1px] w-[100%] border"></div>
                                    <div class="flex justify-between">
                                        <p class="text-[14px] font-semibold text-[#0A0A0B]">Total Pembayaran
                                        </p>
                                        <p class="text-[14px] font-semibold text-[#0A0A0B]">
                                            Rp{{ number_format($item->price) }}</p>
                                    </div>

                                    <button class="btn btn-primary mt-6 w-[100%]" onclick="HandlePaymentMobile({{ $item->id }})">Konfirmasi
                                        Pembayaran
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<div class="hidden">
    <form action="{{ url('/member/payment') }}" method="post" id="form-submit-mobile">
        @csrf
        {{-- Kirim Shipping Type sama product Id --}}
        <input type="text" name="product_id" value="sampe sini" id="product_id_mobile">
        <input type="text" name="shipping_type" value="sampe sini" id="shipping_type_mobile">
    </form>
</div>

<script>
    let userChooseDeliverMobile = 'on_send';
    const HandleOnSendMobile = (optionDeliver) => {
        userChooseDeliverMobile = optionDeliver

        if (userChooseDeliverMobile == optionDeliver) {
            for (let i = 0; i < $('.user-send-mobile').length; i++) {
                $('.user-location-mobile')[i].classList.add('btn-outline')
                $('.user-send-mobile')[i].classList.remove('btn-outline')
            }
        }
        console.log(userChooseDeliverMobile);
    }
    const HandleOnLocationMobile = (optionDeliver) => {
        userChooseDeliverMobile = optionDeliver
        if (userChooseDeliverMobile == optionDeliver) {
            for (let i = 0; i < $('.user-send-mobile').length; i++) {
                $('.user-send-mobile')[i].classList.add('btn-outline')
                $('.user-location-mobile')[i].classList.remove('btn-outline')
            }
        }
        console.log(userChooseDeliverMobile);
    }
    let tabMobileComponent = $('.tab-product-mobile');
    const HandleMobileTab = (tabCode) => {
        for (let index = 0; index < tabMobileComponent.length; index++) {
            let elem = $('.tab-product-mobile')[index];
            if (!elem.classList.contains('-bottom-[1000px]')) {
                elem.classList.add('-bottom-[1000px]');
            }
        }
        $(`#${tabCode}`).removeClass('-bottom-[1000px]').addClass('bottom-0');
    }

    const HandleMobileCloseTab = (tabCode) => {
        $(`#${tabCode}`).removeClass('bottom-0')
        $(`.tab-product-mobile`).addClass('-bottom-[1000px]')
        // for (let index = 0; index < tabComponent.length; index++) {
        //     let elem = $('.tab-product-mobile')[index];
        //     if (!elem.classList.contains('-bottom-[1000px]')) {
        //         elem.classList.add('-bottom-[1000px]');
        //     }
        //     if (elem.classList.contains('bottom-0')) {
        //         elem.classList.add('bottom-[1000px]');
        //     }
        // }
    }
</script>

<script>
    const HandlePaymentMobile = (product_id_mobile) => {
        document.getElementById('shipping_type_mobile').value = userChooseDeliver
        document.getElementById('product_id_mobile').value = product_id_mobile
        document.getElementById('form-submit-mobile').submit()
    }
</script>