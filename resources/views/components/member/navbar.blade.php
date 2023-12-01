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
                        <div class="">
                            <a href="">Lihat Semua</a>
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

<div class="fixed z-[999] hidden h-screen w-screen bg-black bg-opacity-30 pt-[85px]" id="container-profile">
    <div class="relative h-full w-screen">
        <div class="absolute bottom-0 left-0 flex h-[650px] w-full items-start overflow-auto rounded-t-[30px] bg-white">
            <div class="relative">
                <aside class="fixed h-screen w-[340px] px-[40.32px] py-[47.41px] text-[#0A0A0B]">
                    {{-- start: Side Menu --}}
                    <div class="flex flex-col justify-between gap-[20.32px] rounded-[12.7px] border border-[#E5E5E5] py-[20.32px]">
                        {{-- start: nav item --}}
                        <button onclick="handleProfil()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold hover:text-primary text-primary" id="tab-text-profil">Profil Pengguna</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button>
                        {{-- end: nav item --}}

                        {{-- start: nav item --}}
                        <button onclick="handleRekening()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold hover:text-primary" id="tab-text-rekening">Rekening</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button>
                        {{-- end: nav item --}}
                        <div class="flex items-center justify-center">
                            <div class="flex h-[1px] w-11/12 justify-center border"></div>

                        </div>

                        {{-- start: nav item --}}
                        <a href="" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <img class="w-6" src="{{ asset('images/icons/logout.svg') }}" alt="">
                                <a href="{{ url('/logout') }}">
                                    <p class="text-[20px] font-semibold text-[#E30613]">Logout</p>
                                </a>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </a>
                        {{-- end: nav item --}}
                    </div>
                    {{-- end: Side Menu --}}
                </aside>

                <!-- Tab Profile -->
                @include('components.member.profile.index')

                <!-- Tab Rekening -->
                @include('components.member.rekening.index')

            </div>

            <div class="font-bold p-[12px_20px] absolute right-6 top-5 text-[#E30613]" onclick="HandleClose()">
                <button>Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
<nav class="lg:hidden fixed left-0 -top-[3px] z-[900] flex w-[100%] items-center justify-between bg-white shadow-md">
    <div class="flex w-full justify-between items-center px-5 py-[10px]">
        <a href="{{ url('/user/dashboard') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]">
        </a>
        <div class="flex items-center justify-between gap-3">

            {{-- Notification --}}
            <button type="button" class="flex items-center justify-center">
                <img src="{{ asset('images/icons/notification.svg') }}" alt="">
            </button>
            {{-- End Notification --}}
            <button type="button" onclick="HandleButton()" id="navbar-button">
                <img src="{{ asset('images/icons/menu.svg') }}" alt="">
            </button>
            @include('components.member.sidebar-mobile')
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
                data && data.map((item, index) => {
                    element += `
                    <div>
                        <p>${item.description}</p>
                    </div>
                `
                })
                $('#notification-container').html(element)
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
                    data && data.map((item, index) => {
                        element += `
                    <div>
                        <p>${item.description}</p>
                    </div>
                `
                    })
                    $('#notification-container').html(element)
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

    let tabProfil = document.getElementById("profil-pengguna")
    let tabRekening = document.getElementById("rekening")

    let tabTextProfil = document.getElementById("tab-text-profil")
    let tabTextRekening = document.getElementById("tab-text-rekening")

    const HandleClose = () => {
        navbarModal.classList.toggle('hidden')
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