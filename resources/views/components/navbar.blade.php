<nav class="fixed left-0 top-0 z-[999] hidden h-[109px] w-screen items-center justify-between bg-white px-[120px] lg:flex">
    <div class="flex items-center justify-center">
        <img src="{{ asset('images/logo.svg') }}" alt="">
    </div>
    <div class="flex items-center lg:gap-[30px] lg:text-[16px]">
        <a href="{{ url('/#tentang-kami-section') }}" class="font-medium">
            <p>Tentang Kami</p>
        </a>
        <a href="{{ url('/#manfaat-section') }}" class="font-medium">
            <p>Manfaat</p>
        </a>
        <a href="{{ url('/#mitra-section') }}" class="font-medium">
            <p>Kemitraan</p>
        </a>

        <a href="{{ url('/login') }}" class="flex justify-center border border-primary font-medium lg:w-[93px] lg:rounded-[10px] lg:p-[10px]">
            <p>Login</p>
        </a>

        <a href="{{ url('/register') }}" class="flex justify-center border border-primary bg-primary font-medium text-white lg:w-[93px] lg:rounded-[10px] lg:p-[10px]">
            <p>Register</p>
        </a>
    </div>
</nav>

<nav class="fixed left-0 top-0 z-[900] w-screen -translate-y-[2px] bg-white lg:hidden">
    <div class="flex items-center justify-between px-5 py-[10px]">
        <div class="flex items-center justify-center">
            <a href="{{ url('/') }}"></a>
            <img src="{{ asset('images/logo.svg') }}" alt="">
        </div>
        <div class="flex items-center justify-center">
            <button type="button" onclick="HandleButton()" id="navbar-button">
                <img src="{{ asset('images/icons/menu.svg') }}" alt="">
            </button>
        </div>
    </div>
</nav>
@include('components.sidebar-mobile')