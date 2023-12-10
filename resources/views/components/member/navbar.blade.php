{{-- Navbar for desktop --}}
<nav class="fixed left-0 top-0 z-[500] hidden lg:flex h-[84px] w-[100%] items-center justify-between bg-white shadow-md">
    <div class="m-5 flex w-[867px] items-center pl-5">
        <a href="{{ url('/user/dashboard') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]">
        </a>
        <div class="ml-[64px] flex h-[80px] w-[400px] items-center justify-between">
            <a href="{{ url('/member/dashboard') }}" class="font-semibold mr-4 {{ request()->is('member/dashboard') ? 'text-primary' : '' }}">
                Dashboard
            </a>

            <a href="{{ url('/member/product') }}" class="font-semibold mr-4 {{ request()->is('member/product') ? 'text-primary' : '' }}">
                Produk
            </a>

            <a href="{{ url('/member/transaction') }}" class="font-semibold mr-4 {{ request()->is('member/transaction') ? 'text-primary' : '' }}"> Transaksi </a>
        </div>
    </div>

    <div class="flex items-center gap-[32px] pr-10">
        {{-- Profile --}}
        <div class="flex items-center gap-[16px]">

            <div class="dropdown-end dropdown">
                <button tabindex="0" class="btn border-0 bg-white hover:border-0 hover:bg-white">
                    <img src="{{ asset('icons/bell-rounded.svg') }}" alt="">
                </button>
                <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-96 bg-base-100 p-2 shadow">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-2" id="notification-container"></div>
                        <div class="flex justify-center">
                            <button onclick="HandleNotification()">Lihat Semua</button>
                        </div>
                    </div>
                </ul>
            </div>

            <div class="flex cursor-pointer items-center gap-[8px]" onclick="HandleClose()">
                <div tabindex="0" class="m-1 flex cursor-pointer items-center">
                    <img src="{{ asset('images/profile.png') }}" alt="" class="w-[30px]">
                    <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                </div>

            </div>
        </div>
        {{-- End Profile --}}
    </div>
</nav>

<!-- notification -->
@include('components.member.notification.index')

<!-- Profile -->
<?php
$provinsi = explode('-', Auth::user()->user_biodata->provinsi);
$kota = explode('-', Auth::user()->user_biodata->kota);
?>
@include('components.member.profile.index')

<!-- mobile -->
<nav class="lg:hidden fixed left-0 -top-[3px] z-[900] flex w-[100%] items-center justify-between bg-white shadow-md">
    <div class="flex w-full justify-between items-center px-5 py-[10px]">
        <a href="{{ url('/user/dashboard') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]">
        </a>
        <div class="flex items-center justify-between gap-3">

            {{-- Notification --}}
            <button type="button" onclick="HandleButtonNotification()" class="flex items-center justify-center">
                <img src="{{ asset('images/icons/notification.svg') }}" alt="">
            </button>
            @include('components.member.notification.mobile')

            {{-- End Notification --}}
            <button type="button" onclick="HandleButton()">
                <img src="{{ asset('images/icons/menu.svg') }}" alt="">
            </button>
            @include('components.member.profile.mobile')
        </div>
    </div>
</nav>
<!-- end mobile -->

{{-- Notification --}}
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/api/notification/user/{{ Auth::user()->id }}',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let element = '';
                for (let i = 0; i < 2; i++) {
                    element += `
                    <div>
                        <p>${data[i].description}</p>
                    </div>
                    `
                }
                $('#notification-container').html(element)

                let elementModal = '';
                data && data.map((item, index) => {
                    elementModal += `
                    <div class="w-[100%] px-8 py-8 bg-[#F2FFF5] rounded-2xl">
                        <div class="flex items-center gap-1 mb-4">
                            <p class="text-[16px] text-[#969EBA]">${item.created_at}</p>
                        </div>
                        <div>
                            <p class="text-[20px] text-[#0A0A0B] font-semibold" id="notification container">${item.description}</p>
                        </div>
                    </div>
                    `
                })
                $('#notification-modal').html(elementModal)

                let elementModalMobile = '';
                data && data.map((item, index) => {
                    elementModalMobile += `
                    <div class="bg-[#F2FFF5] w-[100%] px-5 py-5">
                        <div class="flex items-center gap-1 mb-4">
                            <p class="text-[12px] text-[#969EBA]">${item.created_at}</p>
                        </div>
                        <div>
                            <p class="text-[16px] text-[#0A0A0B] font-semibold">${item.description}</p>
                        </div>
                    </div>
                    `
                })
                $('#notification-data').html(elementModalMobile)
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        setInterval(() => {
            $.ajax({
                url: 'http://localhost:8000/api/notification/user/{{ Auth::user()->id }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    let element = '';
                    for (let i = 0; i < 2; i++) {

                        element += `
                    <div>
                        <p>${data[i].description}</p>
                    </div>
                    `
                    }
                    $('#notification-container').html(element)

                    let elementModal = '';
                    data && data.map((item, index) => {
                        elementModal += `
                    <div class="w-[100%] px-8 py-8 bg-[#F2FFF5] rounded-2xl">
                        <div class="flex items-center gap-1 mb-4">
                            <p class="text-[16px] text-[#969EBA]">${item.created_at}</p>
                        </div>
                        <div>
                            <p class="text-[20px] text-[#0A0A0B] font-semibold" id="notification container">${item.description}</p>
                        </div>
                    </div>
                    `
                    })
                    $('#notification-modal').html(elementModal)

                    let elementModalMobile = '';
                    data && data.map((item, index) => {
                        elementModalMobile += `
                    <div class="bg-[#F2FFF5] w-[100%] px-5 py-5">
                        <div class="flex items-center gap-1 mb-4">
                            <p class="text-[12px] text-[#969EBA]">${item.created_at}</p>
                        </div>
                        <div>
                            <p class="text-[16px] text-[#0A0A0B] font-semibold">${item.description}</p>
                        </div>
                    </div>
                    `
                    })
                    $('#notification-data').html(elementModalMobile)

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }, 10000)
    });
</script>

{{-- Tab Profile --}}
<script>
    let currentTab = "profil-pengguna"
    let navbarModal = document.getElementById("container-profile")

    let navbarNotification = document.getElementById("container-notification")

    let tabProfil = document.getElementById("profil-pengguna")
    let tabRekening = document.getElementById("rekening")

    let tabTextProfil = document.getElementById("tab-text-profil")
    let tabTextRekening = document.getElementById("tab-text-rekening")

    const HandleClose = () => {
        navbarModal.classList.toggle('hidden')
    }

    const HandleNotification = () => {
        navbarNotification.classList.toggle('hidden')
    }

    const handleProfil = () => {

        tabProfil.classList.remove('hidden')
        tabTextProfil.classList.add('text-primary')

        if (!tabRekening.classList.contains('hidden')) {
            tabRekening.classList.add('hidden')
        }

        if (!tabTextProfil.classList.contains('text-primary')) {}

        if (tabTextRekening.classList.contains('text-primary')) {
            tabTextRekening.classList.remove('text-primary')
        }
    }
    const handleRekening = () => {
        tabRekening.classList.remove('hidden')
        tabTextRekening.classList.add('text-primary')

        if (!tabProfil.classList.contains('hidden')) {
            tabProfil.classList.add('hidden')
        }

        if (tabTextProfil.classList.contains('text-primary')) {
            tabTextProfil.classList.remove('text-primary')
        }
    }
</script>

{{-- Get Province and City --}}
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/api/get-address',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var provinsi = @json($provinsi[0]);
                var kota = @json($kota[0]);
                let provinceElement = '';
                (data.provincies).forEach(province => {
                    if (province['id'] == provinsi) {
                        provinceElement += `
                            <option value"${province['id']}-${province['province_name']}" selected>
                                <p>${province['province_name']}</p>
                            </option>
                        `
                    } else {
                        provinceElement += `
                        <option value"${province['id']}-${province['province_name']}">
                            <p>${province['province_name']}</p>
                        </option>
                    `
                    }
                })
                $('#provincy-select').html(provinceElement);
                $('#provincy-mobile-select').html(provinceElement);

                let cityElement = '';
                (data.cities).forEach(city => {
                    if (city['id'] == kota) {
                        cityElement += `
                            <option value"${city['city_id']}-${city['city_name']}" selected>
                                <p>${city['city_name']}(${city['type']})</p>
                            </option>
                        `
                    }
                    cityElement += `
                        <option value"${city['city_id']}-${city['city_name']}">
                            <p>${city['city_name']}(${city['type']})</p>
                        </option>
                    `
                })
                $('#city-select').html(cityElement);
                $('#city-mobile-select').html(cityElement);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    })
</script>