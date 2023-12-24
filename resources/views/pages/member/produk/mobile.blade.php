<div class="z-10 flex h-full w-full items-center lg:hidden">
    <div class="grid grid-cols-2 place-content-center">
        <?php $multiple = 2;
        $no = 0; ?>
        @foreach ($product as $item)
        @if ($item->product_code != 'P00')
        <div class="m-3 h-[310px] w-[150px] rounded-xl bg-base-100 shadow-md">
            <figure>
                <img class="h-[150px] w-[150px] rounded-[12px_12px_0px_0px] bg-[#D9D9D9] object-cover" src="{{ asset('/images/'.$item->image) }}" alt="Shoes" />
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
                    <form action="{{ url('/member/payment') }}" method="post">
                        @csrf
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
                                @php
                                $index = 0;
                                @endphp
                                @foreach ($variants as $variant)
                                <div class="mb-2 flex justify-between items-center">
                                    <div class="flex gap-2 items-center">
                                        <img src="{{url('images/'. $variant->variant_image)}}" class="h-[70px] w-[70px] rounded-[5px] bg-[#D9D9D9] object-cover">
                                        <div class="flex flex-col">
                                            <p class="text-[14px]">{{ $variant->variant_name }}</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <p class="text-center text-[10px]">Jumlah</p>
                                        <div class="flex">

                                            {{-- ID VARIANT --}}
                                            <input type="number" name="variant[{{ $index }}][id]" value="{{ $variant->id }}" class="input input-primary hidden" max="100">
                                            {{-- NILAI VARIAN --}}

                                            <button class="btn h-2" type="button" onclick="decrease('{{ $variant->id }}', '{{ $index }}', '{{ $item->product_code }}')">-</button>

                                            <input type="number" name="variant[{{ $index }}][value]" class="input input-primary pointer-events-none" value="0" min="0" max="100" id="counter{{ $variant->id }}_{{ $index }}_{{ $item->product_code }}" readonly>

                                            <button class="btn h-2" type="button" onclick="increase('{{ $variant->id }}', '{{ $index }}', '{{ $item->product_code }}')">+</button>



                                        </div>

                                    </div>
                                </div>
                                @php
                                $index++;
                                @endphp
                                @endforeach

                                <input type="text" name="product_id" value="{{ $item->id }}" id="" class="hidden">

                                <div class="mt-6">
                                    <div class="flex">
                                        <!-- <img src="{{ asset('images/biopolis.png') }}" class="h-[50px] w-[50px] rounded-[5px] bg-[#D9D9D9] object-cover"> -->
                                        <div class="flex flex-col justify-around">
                                            <p class="text-[14px] font-semibold text-[#0A0A0B]">Paket Biopolis</p>
                                            <div>
                                                <span class="text-[13px] text-[#969EBA] line-through">Rp{{ number_format($item->price + $item->price*100/35) }}</span>
                                                <span class="text-[13px] text-[#20B15A]">Rp{{ number_format($item->price) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <p class="text-[12px] font-semibold text-[#0A0A0B]">Tipe Pemesanan</p>
                                        <div class="flex gap-6">
                                            <style>
                                                #ambil_ditempat_mobile {
                                                        {
                                                        $item->id
                                                    }
                                                }

                                                :checked+label {
                                                    background-color: #20b15a !important;
                                                    color: white !important;

                                                }

                                                #dikirim_mobile {
                                                        {
                                                        $item->id
                                                    }
                                                }

                                                :checked+label {
                                                    background-color: #20b15a !important;
                                                    color: white !important;
                                                }
                                            </style>


                                            <div class="space-y-2" id="">
                                                <input type="radio" id="ambil_ditempat_mobile{{ $item->id }}" name="shipping_type" value="on_location" class="hidden">
                                                <label for="ambil_ditempat_mobile{{ $item->id }}" class="btn cursor-pointer rounded-md px-4 py-2">
                                                    Ambil ditempat
                                                </label>

                                                <input type="radio" id="dikirim_mobile{{ $item->id }}" name="shipping_type" value="on_send" class="hidden" checked>
                                                <label for="dikirim_mobile{{ $item->id }}" class="btn cursor-pointer rounded-md">
                                                    Dikirim
                                                </label>
                                            </div>
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

                                        <button type="submit" class="btn btn-primary mt-6 w-[100%]">Konfirmasi
                                            Pembayaran
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<div class="hidden">
    <form action="{{ url('/member/payment') }}" method="post" id="form-submit">
        @csrf
        {{-- Kirim Shipping Type sama product Id --}}
        <input type="text" name="product_id" value="sampe sini" id="product_id">
        <input type="text" name="shipping_type" value="sampe sini" id="shipping_type">
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

<script>
    let counterValues = {};

    function updateCounter(variantId, index, tabNumber) {
        document.getElementById(`counter${variantId}_${index}_${tabNumber}`).value = counterValues[`${variantId}_${index}_${tabNumber}`];
    }

    function decrease(variantId, index, tabNumber) {
        if (counterValues[`${variantId}_${index}_${tabNumber}`] > 0) {
            counterValues[`${variantId}_${index}_${tabNumber}`]--;
            updateCounter(variantId, index, tabNumber);
        }
    }

    function increase(variantId, index, tabNumber) {
        if (!counterValues[`${variantId}_${index}_${tabNumber}`]) {
            counterValues[`${variantId}_${index}_${tabNumber}`] = 0;
        }
        counterValues[`${variantId}_${index}_${tabNumber}`]++;
        updateCounter(variantId, index, tabNumber);
    }
</script>