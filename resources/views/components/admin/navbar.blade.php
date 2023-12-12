<nav class="flex h-[115.13px] items-center justify-end bg-white px-[20.32px]">
    <div class="flex items-center gap-[27.09px]">
        <div>
            <div class="dropdown-end dropdown">
                <label tabindex="0" class="m-1 flex cursor-pointer items-center">
                    <img src="{{ asset('images/profile.png') }}" alt="" class="w-[30px]">
                    <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                </label>
                <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-52 bg-base-100 p-2 shadow">
                    <li><a href="{{ url('/logout') }}">
                            <p class="text-[13px] font-semibold text-[#E30613]">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>