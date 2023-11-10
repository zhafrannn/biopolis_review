<nav class="fixed bg-white h-[84px] w-[100%] flex justify-between items-center z-999 left-0 top-0 shadow-md">
    <div class="m-5 w-[867px] flex items-center pl-5">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]"></a>
        <div class="h-[80px] flex justify-between items-center w-[400px] ml-[64px]">
            <a href="" class="active flex items-center font-[16px] font-semibold">Dashboard</a>
            <a href="" class="flex items-center font-semibold font-[16px]">Produk</a>
            <a href="" class="flex items-center font-semibold font-[16px]">Transaksi</a>
        </div>
    </div>

    <div class="flex items-center pr-10 gap-[32px]">
        {{-- Notification --}}
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/image/icon/notification.svg') }}" alt="">
        </div>
        {{-- End Notification --}}
        {{-- Profile --}}
        <div class="flex items-center" style="gap: 16px">

            <div class="flex items-center gap-[8px]">
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="m-1 flex cursor-pointer items-center">
                        <img src="{{ asset('images/icons/sample-avatar-profile.svg') }}" alt="">
                        <p class="ml-[13.54px] text-[16.93px] font-semibold">Farisku</p>
                        <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                    </label>
                    <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-52 bg-base-100 p-2 shadow">
                        <li><a class="font-semibold">Profile</a></li>
                        <li><a class="font-semibold" href="" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id=" logout-form" action="" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        {{-- End Profile --}}
    </div>

</nav>