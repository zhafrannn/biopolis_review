<div class="lg:hidden fixed -left-[100%] top-0 z-[999] h-screen w-screen bg-white p-5 transition-all duration-300" id="navbar-mobile">
    <div class="flex flex-col">
        <div class="flex items-center justify-end">
            <button onclick="HandleButton()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
        </div>
        <div class="mt-[60px] flex flex-col p-3 text-[16px]">
            <div class="flex flex-col gap-[60px] text-[16px]">
                <a href="{{ url('/#tentang-kami-section') }}" class="font-medium">
                    <p>Tentang Kami</p>
                </a>
                <a href="{{ url('/#manfaat-section') }}" class="font-medium">
                    <p>Manfaat</p>
                </a>
                <a href="{{ url('/#mitra-section') }}" class="font-medium">
                    <p>Kemitraan</p>
                </a>
            </div>
            <div class="mt-[215px]">
                <a href="{{ url('/login') }}" class="mb-[20px] flex w-[100%] justify-center rounded-[10px] border border-primary p-[10px] font-medium">
                    <p>Login</p>
                </a>

                <a href="{{ url('/register') }}" class="flex w-[100%] justify-center rounded-[10px] border border-primary bg-primary p-[10px] font-medium text-white">
                    <p>Register</p>
                </a>
            </div>
            <p class="-right-[0%]"></p>
            <p class="-right-[100%]"></p>
        </div>
    </div>
</div>

<script>
    let navbarMobile = document.getElementById("navbar-mobile")

    const HandleButton = () => {
        navbarMobile.classList.toggle('-left-[0%]')
    }
</script>