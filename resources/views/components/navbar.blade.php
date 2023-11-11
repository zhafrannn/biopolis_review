<nav class="fixed left-0 top-0 flex h-[109px] w-screen items-center justify-between bg-white px-[120px]">
    <div class="flex items-center justify-center">
        <img src="{{ asset('images/logo.svg') }}" alt="">
    </div>
    <div class="flex items-center gap-[30px] text-[16px]">
        <a href="" class="font-medium">
            <p>Tentang Kami</p>
        </a>
        <a href="{{ url('/#manfaat-section') }}" class="font-medium">
            <p>Manfaat</p>
        </a>
        <a href="{{ url('/#mitra-section') }}" class="font-medium">
            <p>Kemitraan</p>
        </a>

        <a href="{{ url('/login') }}"
            class="flex w-[93px] justify-center rounded-[10px] border border-primary p-[10px] font-medium">
            <p>Login</p>
        </a>

        <a href="{{ url('/register') }}"
            class="flex w-[93px] justify-center rounded-[10px] border border-primary bg-primary p-[10px] font-medium text-white">
            <p>Register</p>
        </a>
    </div>
</nav>
