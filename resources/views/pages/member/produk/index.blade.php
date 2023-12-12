@extends('layouts.auth-member')

@section('title')
Product | Biopolis Propolis
@endsection

@section('content')
<div class="z-10 hidden h-full justify-around p-5 lg:flex">

    <?php $multiple = 2;
    $no = 0; ?>
    @foreach ($product as $item)
    @if ($item->product_code != 'P00')
    <div class="card-compact card h-[490px] w-[254px] overflow-hidden bg-base-100 shadow-md">
        <figure class="">
            <img class="bg-[#D9D9D9] object-cover object-center" src="{{ asset('/images/biopolis.png') }}" alt="Shoes" />
        </figure>

        <div class="card-body">

            <h2 class="card-title">Paket Biopolis</h2>
            <p class="text-[16px] text-primary">+{{ $item->point }} poin</p>
            <p class="text-[16px] font-semibold">{{ $item->product_name }} Propolis Biopolis</p>
            <p class="mt-2 text-[20px] font-semibold text-[#0A0A0B]">Rp{{ number_format($item->price) }}</p>
            <div class="flex">
                <?php $discount = explode(' ', $item->product_name); ?>
                <span class="text-[16px] text-[#969EBA] line-through">Rp{{ $multiple * 1950000 }}
                    <?php $multiple = $multiple + 2; ?></span>
                <span class="ml-1 text-[16px] text-[#E30613]">35%</span>
            </div>


            <div class="card-actions mt-4 items-center justify-center">
                <button onclick="HandleTab('tab-{{ $item->product_code }}')" class="text btn btn-primary w-[100%]">Beli
                    Sekarang
                </button>
            </div>
        </div>

    </div>

    <div id="tab-{{ $item->product_code }}" class="tab-product fixed -bottom-[1000px] left-0 z-[999] h-screen w-screen bg-black bg-opacity-30 pt-[100px] transition-all duration-300">
        <div class="relative h-full rounded-t-[30px] bg-white px-5 pt-20">
            {{-- Close --}}
            <div class="absolute right-5 top-5">
                <button onclick="HandleCloseTab('tab-{{ $item->product_code }}')">Close</button>
            </div>
            <div class="h-full overflow-y-auto">
                <h1 class="mb-[26px] ml-3 text-[32px] font-semibold">Checkout</h1>
                <div class="flex items-start">
                    <div class="m-3 w-8/12 gap-6 rounded-2xl bg-white p-[24px] shadow-md">
                        <p class="mb-6 text-[20px] font-semibold text-[#0A0A0B]">Alamat Pengiriman</p>
                        <p class="text-[20px]text-[#0A0A0B] font-semibold">{{ Auth::user()->name }}</p>
                        <p class="text-[20px] text-[#969EBA]">{{ Auth::user()->user_biodata->no_whatsapp }}</p>
                        <div>
                            <p class="text-[20px] text-[#969EBA]">
                                {{ Auth::user()->user_biodata->alamat_lengkap }}
                            </p>
                            <?php $kota = explode('-', Auth::user()->user_biodata->kota);
                            $provinsi = explode('-', Auth::user()->user_biodata->provinsi); ?>
                            <p class="text-[20px] text-[#969EBA]">
                                Kota : {{ $kota[1] }}
                            </p>
                            <p class="text-[20px] text-[#969EBA]">
                                Provinsi : {{ $provinsi[1] }}
                            </p>
                        </div>
                        <div class="mb-6 mt-6 h-[1px] w-[100%] border-[3px]"></div>
                        <p class="text-[20px] font-semibold text-[#0A0A0B]">Biopolis</p>
                        <p class="text-[14px] text-[#0A0A0B]">Kota Bandung</p>
                        <div class="mt-6 flex items-start justify-between">
                            <div class="flex">
                                <img src="" alt="gambar-produk" class="h-[121px] w-[121px] rounded-[5px] bg-[#D9D9D9]">
                                <div class="ml-4 flex flex-col justify-around">
                                    <p class="text-[20px] font-semibold text-[#0A0A0B]">Paket Biopolis</p>
                                    <div>
                                        <span class="text-[16px] text-[#969EBA] line-through">Rp{{ $multiple * 1950000 }}</span>
                                        <span class="text-[16px] text-[#20B15A]">Rp{{ number_format($item->price) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end justify-between">
                                <p class="mb-2 text-[20px] font-semibold text-[#0A0A0B]">Tipe Pemesanan</p>
                                <div class="flex gap-6">
                                    <button onclick="HandleOnSend('on_send')" class="user-send btn btn-primary">
                                        Dikirim
                                    </button>
                                    <button onclick="HandleOnLocation('on_location')" class="user-location btn btn-primary btn-outline">
                                        Ambil ditempat
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-3 w-4/12 rounded-2xl bg-white p-[20.32px] shadow-md">
                        <p class="text-[16px] font-semibold text-[#0A0A0B]">Ringkasan Belanja</p>
                        <div class="mt-8 flex justify-between">
                            <p class="text-[16px] text-[#0A0A0B]">Total Belanja</p>
                            <p class="text-[16px] text-[#0A0A0B]">Rp{{ number_format($item->price) }}</p>
                        </div>
                        <!-- <div class="flex justify-between">
                            <p class="text-[16px] text-[#0A0A0B]">Total Ongkir</p>
                            <p class="text-[16px] text-[#0A0A0B]">Rp0</p>
                        </div> -->
                        <div class="mb-6 mt-6 h-[1px] w-[100%] border"></div>
                        <div class="flex justify-between">
                            <p class="text-[16px] font-semibold text-[#0A0A0B]">Total Pembayaran</p>
                            <p class="text-[16px] font-semibold text-[#0A0A0B]">
                                Rp{{ number_format($item->price) }}</p>
                        </div>

                        <button class="btn btn-primary mt-6 w-[100%]" onclick="HandlePayment({{ $item->id }})">Konfirmasi
                            Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- mobile -->
@include('pages.member.produk.mobile')
<!-- end mobile -->

<div class="hidden">
    <form action="{{ url('/member/payment') }}" method="post" id="form-submit">
        @csrf
        {{-- Kirim Shipping Type sama product Id --}}
        <input type="text" name="product_id" value="sampe sini" id="product_id">
        <input type="text" name="shipping_type" value="sampe sini" id="shipping_type">
    </form>
</div>


<script>
    let userChooseDeliver = 'on_send';
    const HandleOnSend = (optionDeliver) => {
        userChooseDeliver = optionDeliver

        if (userChooseDeliver == optionDeliver) {
            for (let i = 0; i < $('.user-send').length; i++) {
                $('.user-location')[i].classList.add('btn-outline')
                $('.user-send')[i].classList.remove('btn-outline')
            }
        }
        console.log(userChooseDeliver);
    }
    const HandleOnLocation = (optionDeliver) => {
        userChooseDeliver = optionDeliver
        if (userChooseDeliver == optionDeliver) {
            for (let i = 0; i < $('.user-send').length; i++) {
                $('.user-send')[i].classList.add('btn-outline')
                $('.user-location')[i].classList.remove('btn-outline')
            }
        }
        console.log(userChooseDeliver);
    }
    let tabComponent = $('.tab-product');
    const HandleTab = (tabCode) => {
        for (let index = 0; index < tabComponent.length; index++) {
            let elem = $('.tab-product')[index];
            if (!elem.classList.contains('-bottom-[1000px]')) {
                elem.classList.add('-bottom-[1000px]');
            }
        }
        $(`#${tabCode}`).removeClass('-bottom-[1000px]').addClass('bottom-0');
    }

    const HandleCloseTab = (tabCode) => {
        console.log("sampe sini", tabCode);

        $(`#${tabCode}`).removeClass('bottom-0')
        $(`.tab-product`).addClass('-bottom-[1000px]')
        // for (let index = 0; index < tabComponent.length; index++) {
        //     let elem = $('.tab-product')[index];
        //     if (!elem.classList.contains('-bottom-[1000px]')) {
        //         elem.classList.add('');
        //     }
        //     if (elem.classList.contains('bottom-0')) {
        //     }
        // }
    }
</script>

<script>
    const HandlePayment = (product_id) => {
        document.getElementById('shipping_type').value = userChooseDeliver
        document.getElementById('product_id').value = product_id
        document.getElementById('form-submit').submit()
    }
</script>
@endsection