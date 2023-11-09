<nav class="flex h-[115.13px] items-center justify-end bg-white px-[20.32px]">
    <div class="flex items-center gap-[27.09px]">
        <button>
            <img src="{{ asset('images/icons/bell-rounded.svg') }}" alt="">
        </button>
        <div>
            <div class="dropdown-end dropdown">
                <label tabindex="0" class="m-1 flex cursor-pointer items-center">
                    <img src="{{ asset('images/icons/sample-avatar-profile.svg') }}" alt="">
                    <p class="ml-[13.54px] text-[16.93px] font-semibold">Farisku</p>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                </label>
                <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-52 bg-base-100 p-2 shadow">
                    <li><a class="font-semibold">Profile</a></li>
                    <li><a class="font-semibold">Logout</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>
