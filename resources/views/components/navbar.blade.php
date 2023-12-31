<nav class="fixed left-0 top-0 z-[500] hidden lg:flex h-[84px] w-[100%] items-center justify-between bg-white shadow-md px-[120px]">
    <div class="flex items-center justify-center">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/fast-network-logo.png') }}" alt="logo" class="w-[120px]">
        </a>
    </div>
    <div class="flex items-center lg:gap-[30px] lg:text-[16px]">
        <!-- <a href="{{ url('/#tentang-kami-section') }}" class="font-medium">
            <p>Tentang Kami</p>
        </a>
        <a href="{{ url('/#manfaat-section') }}" class="font-medium">
            <p>Manfaat</p>
        </a>
        <a href="{{ url('/#mitra-section') }}" class="font-medium">
            <p>Kemitraan</p>
        </a> -->

        <a href="{{ url('/login') }}" class="flex justify-center border border-primary font-medium lg:w-[93px] lg:rounded-[10px] lg:p-[10px]">
            <p>Masuk</p>
        </a>

        <a href="{{ url('/register') }}" class="flex justify-center border border-primary bg-primary font-medium text-white lg:w-[93px] lg:rounded-[10px] lg:p-[10px]">
            <p>Daftar</p>
        </a>
    </div>
</nav>

<!-- Mobile -->
<nav class="fixed left-0 top-0 z-[900] w-screen -translate-y-[2px] bg-white lg:hidden">
    <div class="flex items-center justify-between px-5 py-[20px]">
        <div class="flex items-center justify-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/fast-network-logo.png') }}" alt="logo" class="w-[80px]">
            </a>
        </div>
        <div class="flex items-center justify-center">
            <button type="button" onclick="HandleButton()" id="navbar-button">
                <img src="{{ asset('images/icons/menu.svg') }}" alt="">
            </button>
        </div>
    </div>
</nav>
@include('components.sidebar-mobile')