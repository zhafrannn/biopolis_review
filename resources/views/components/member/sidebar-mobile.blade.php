<div class="lg:hidden fixed top-0 -left-[100%] z-[950] h-screen w-screen bg-white p-5 transition-all duration-300 " id="navbar-mobile">
    <div class="flex flex-col">
        <div class="flex items-center justify-end">
            <button onclick="HandleCloseTabProfile()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
        </div>
        <div class="mt-[30px] flex flex-col h-screen p-1 text-[16px] gap-[70px]">
            <div tabindex="0" class="cursor-pointer items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/profile.png') }}" alt="" class="w-[60px]">
                    <div class="flex flex-col">
                        <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                        <p class="ml-[13.54px] text-[16.93px]">{{ Auth::user()->user_biodata->no_whatsapp }}</p>
                    </div>
                </div>
                <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
            </div>
            <div class="flex flex-col gap-[40px] text-[16px]">
                <a href="{{ url('/user/dashboard') }}" class="font-semibold">
                    <p>Dashboard</p>
                </a>
                <a href="{{ url('/member/product') }}" class="font-semibold">
                    <p>Produk</p>
                </a>
                <a href="{{ url('/member/transaction') }}" class="font-semibold">
                    <p>Transaksi</p>
                </a>
            </div>


            {{-- start: nav item --}}
            <div class="flex flex-col justify-between">
                <div class="rounded-xl border p-[12px_16px]">
                    <p class="text-[16px] font-semibold ">Pengaturan Akun</p>
                    <button onclick="HandleUbahProfile()" class="flex items-center gap-2 mt-3">
                        <img src="{{asset('images/icons/edit.svg')}}" alt="edit" class="w-[30px]">
                        <p class="text-[16px] font-medium">Ubah profile</p>
                    </button>
                    <button onclick="HandleUbahRekening()" class="flex items-center gap-2 mt-3">
                        <img src="{{asset('images/icons/card-profile.svg')}}" alt="" class="w-[30px]">
                        <p class="text-[16px] font-medium">Ubah Rekening</p>
                    </button>
                </div>
                <div class="flex items-center border rounded-xl mt-5 p-[12px_16px]">
                    <a href="{{ url('/logout') }}" class="flex items-center gap-2">
                        <img src="{{asset('images/icons/logout.svg')}}" alt="">
                        <p class="font-semibold text-[#E30613]">Keluar</p>
                    </a>
                    {{-- if active remove hidden --}}
                    <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                    {{-- if active remove hidden --}}
                </div>

            </div>
            {{-- end: nav item --}}
        </div>
    </div>
</div>
<!-- Start Ubah Profile -->
<div class="lg:hidden fixed top-0 -left-[100%] z-[970] h-screen w-screen bg-white p-5 transition-all duration-300 overflow-y-auto" id="ubah-profile">
    <div class="flex flex-col ">
        <div class="flex items-center">
            <button onclick="HandleCloseUbahProfile()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
            <p class="font-semibold ml-5">Ubah Profile</p>
        </div>
        <form action="{{ url('/member/profile/update/'. Auth::user()->id) }}" method="POST">
            @csrf
            <div class="mt-[40px]">
                <h1 class="font-semibold text-18">Informasi Umum</h1>
                <div class="mb-[20px] w-full border"></div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Nama</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->name }}" name="name">
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">NIK</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->nik }}" name="nik">
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Nomor Telepon</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->no_whatsapp }}" name="no_whatsapp">
                </div>
                <?php
                $str1 = explode('-', Auth::user()->user_biodata->provinsi);
                $str2 = explode('-', Auth::user()->user_biodata->kota);
                ?>
                <h1 class="mt-[30px] font-semibold text-18">Informasi Alamat Pengiriman</h1>
                <div class=" mb-[30px] w-full border"></div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Provinsi</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ $str1[1]}}" name="provinsi" readonly>
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Kota</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ $str2[1] }}" name="kota" readonly>
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Alamat Lengkap</label>
                    <textarea type="text" rows="3" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->alamat_lengkap }}" name="alamat_lengkap">{{Auth::user()->user_biodata->alamat_lengkap}}</textarea>
                </div>

                <h1 class="mt-[30px] font-semibold text-18">Informasi Akun</h1>
                <div class="mb-[30px] w-full border"></div>
                <div class="flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Email</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->email }}" name="email">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Password</label>
                    <input type="password" class="rounded-[9.904px] border p-[10.56px]" name="password">
                </div>
            </div>
            <div class="pt-[60px]">
                <button type="submit" class="w-[100%] rounded-[9.904px] bg-primary flex justify-center py-[9.244px] text-white">Ubah Profile</button>
            </div>
        </form>
    </div>
</div>
<!-- End Ubah Profile -->

<!-- Start Ubah Rekening -->
<div class="lg:hidden fixed top-0 -left-[100%] z-[980] h-screen w-screen bg-white p-5 transition-all duration-300 " id="ubah-rekening">
    <div class="flex flex-col">
        <div class="flex items-center">
            <button onclick="HandleCloseUbahRekening()">
                <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
            </button>
            <p class="font-semibold ml-5">Ubah Rekening</p>
        </div>
        <form action="{{ url('/member/'. Auth::user()->id) }}" method="POST">
            @csrf
            <div class="mt-[40px]">
                <h1 class="font-semibold text-18">Rekening Pencairan</h1>
                <div class="mb-[20px] w-full border"></div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Nama Bank</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->nama_bank }}" name="nama_bank">
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Nama Rekening</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->nama_rekening }}" name="nama_rekening">
                </div>
                <div class="mb-[10px] flex flex-col">
                    <label for="" class="mb-[10px] text-[14px] text-[#969EBA] font-semibold">Nomor Rekening</label>
                    <input type="text" class="rounded-[9.904px] border p-[10.56px]" value="{{ Auth::user()->user_biodata->no_rekening }}" name="no_rekening">
                </div>
            </div>
            <div class="pt-[60px]">
                <button type="submit" class="w-[100%] rounded-[9.904px] bg-primary flex justify-center py-[9.244px] text-white">Ubah Rekening</button>
            </div>
        </form>
    </div>
</div>
<!-- End Ubah Rekening -->

<script>
    let navbarMobile = document.getElementById("navbar-mobile")
    let tabUbahProfile = document.getElementById("ubah-profile")
    let tabUbahRekening = document.getElementById("ubah-rekening")

    const HandleButton = () => {
        if (navbarMobile.classList.contains('-left-[100%]')) {
            navbarMobile.classList.remove('-left-[100%]')
            navbarMobile.classList.add('left-0')
        }
    }

    const HandleCloseTabProfile = () => {
        if (navbarMobile.classList.contains('left-0')) {
            navbarMobile.classList.remove('left-0')
            navbarMobile.classList.add('-left-[100%]')

        }
    }

    const HandleUbahProfile = () => {
        if (tabUbahProfile.classList.contains('-left-[100%]')) {
            tabUbahProfile.classList.remove('-left-[100%]')
            tabUbahProfile.classList.add('left-0')

        }
    }
    const HandleCloseUbahProfile = () => {
        if (tabUbahProfile.classList.contains('left-0')) {
            tabUbahProfile.classList.remove('left-0')
            tabUbahProfile.classList.add('-left-[100%]')

        }
    }

    const HandleUbahRekening = () => {
        if (tabUbahRekening.classList.contains('-left-[100%]')) {
            tabUbahRekening.classList.remove('-left-[100%]')
            tabUbahRekening.classList.add('left-0')

        }
    }

    const HandleCloseUbahRekening = () => {
        if (tabUbahRekening.classList.contains('left-0')) {
            tabUbahRekening.classList.remove('left-0')
            tabUbahRekening.classList.add('-left-[100%]')

        }
    }
</script>