<div class="fixed -left-[100%] top-0 z-[999] h-screen w-screen bg-white p-5 transition-all duration-300" id="navbar-mobile">
    <div class="flex flex-col">
        <div class="flex items-center justify-end">
            <button onclick="HandleClose()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
        </div>
        <div class="mt-[60px] flex flex-col p-3 text-[16px]">
            <div class="flex flex-col gap-[60px] text-[16px]">
                <a href="{{ url('/#tentang-kami-section') }}" class="font-medium">
                    <button onclick="HandleClose()">Tentang Kami</button>
                </a>
                <a href="{{ url('/#manfaat-section') }}" class="font-medium">
                    <button onclick="HandleClose()">Manfaat</button>
                </a>
                <a href="{{ url('/#mitra-section') }}" class="font-medium">
                    <button onclick="HandleClose()">Kemitraan</button>
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
        </div>
    </div>
</div>

<script>
    let navbarMobile = document.getElementById("navbar-mobile")

    const HandleButton = () => {
        if (navbarMobile.classList.contains('-left-[100%]')) {
            navbarMobile.classList.remove('-left-[100%]')
            navbarMobile.classList.add('left-0')
        }
    }
    const HandleClose = () => {
        if (navbarMobile.classList.contains('left-0')) {
            navbarMobile.classList.remove('left-0')
            navbarMobile.classList.add('-left-[100%]')

        }

    }
</script>