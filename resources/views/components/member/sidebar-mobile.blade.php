<div class="lg:hidden fixed -left-[100%] top-0 z-[999] h-screen w-screen bg-white p-5 transition-all duration-300" id="navbar-mobile">
    <div class="flex flex-col">
        <div class="flex items-center justify-end">
            <button onclick="HandleButton()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
        </div>
        <div class="mt-[60px] flex flex-col p-3 text-[16px] gap-[60px]">
            <div tabindex="0" class="m-1 flex cursor-pointer items-center">
                <img src="{{ asset('images/icons/sample-avatar-profile.svg') }}" alt="">
                <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
            </div>
            <div class="flex flex-col gap-[60px] text-[16px]">
                <a href="{{ url('/user/dashboard') }}" class="font-medium">
                    <p>Dashboard</p>
                </a>
                <a href="{{ url('/member/product') }}" class="font-medium">
                    <p>Produk</p>
                </a>
                <a href="{{ url('/member/transaction') }}" class="font-medium">
                    <p>Transaksi</p>
                </a>
            </div>

            {{-- start: nav item --}}
            <div class="flex items-center">
                <a href="{{ url('/logout') }}">
                    <p class="font-semibold text-[#E30613]">Keluar</p>
                </a>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
            {{-- end: nav item --}}
        </div>
    </div>
</div>

<script>
    let navbarMobile = document.getElementById("navbar-mobile")

    const HandleButton = () => {
        navbarMobile.classList.toggle('-left-[0%]')
    }
</script>
<!-- 
{{-- Profile --}}
<div class="flex items-center gap-[16px]">
    <div class="dropdown-end dropdown">
        <button tabindex="0" class="btn border-0 bg-white hover:border-0 hover:bg-white">
            <img src="{{ asset('icons/bell-rounded.svg') }}" alt="">
        </button>
        <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-96 bg-base-100 p-2 shadow">
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-2" id="notication-container"></div>
                <div>
                    <a href="">Lihat Semua</a>
                </div>
            </div>
        </ul>
    </div>

    <div class="flex cursor-pointer items-center gap-[8px]" onclick="HandleClose()">
        <div tabindex="0" class="m-1 flex cursor-pointer items-center">
            <img src="{{ asset('images/icons/sample-avatar-profile.svg') }}" alt="">
            <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
            <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
        </div>

    </div>
</div>
{{-- End Profile --}} -->