<nav class="z-999 fixed left-0 top-0 z-50 hidden lg:flex h-[84px] w-[100%] items-center justify-end bg-white shadow-md">
    <div class="flex items-center gap-[32px] pr-10">
        {{-- Profile --}}
        <div class="flex items-center" style="gap: 16px">
            <div class="flex items-center gap-[8px]">
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="m-1 flex cursor-pointer items-center">
                        <img src="{{ asset('images/profile.png') }}" alt="">
                        <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                        <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                    </label>
                    <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-52 bg-base-100 p-2 shadow">
                        <li>
                            <a class="font-semibold" href="" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="get" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        {{-- End Profile --}}
    </div>
</nav>

<!-- mobile -->
<nav class="z-999 fixed left-0 top-0 z-50 flex w-[100%] items-center justify-end bg-white shadow-md">
    <div class="flex items-center gap-[32px] px-5 py-[10px]">
        {{-- Profile --}}
        <div class=" flex items-center" style="gap: 16px">
            <div class="flex items-center gap-[8px]">
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="m-1 flex cursor-pointer items-center">
                        <img src="{{ asset('images/profile.png') }}" alt="">
                        <p class="ml-[13.54px] text-[11px] font-semibold">{{ Auth::user()->name }}</p>
                        <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                    </label>
                    <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-[120px] bg-base-100 p-2 shadow">
                        <li>
                            <a class="text-[10px] font-semibold" href="" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="get" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        {{-- End Profile --}}
    </div>

</nav>