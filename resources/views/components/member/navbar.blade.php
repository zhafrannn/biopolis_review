<nav class="fixed bg-white h-[84px] w-[100%] flex justify-between items-center z-999 left-0 top-0 shadow-md z-50">
    <div class="m-5 w-[867px] flex items-center pl-5">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]"></a>
        <div class="h-[80px] flex justify-between items-center w-[400px] ml-[64px]">
            <a href="" class="active flex items-center text-[16px] font-semibold">Dashboard</a>
            <a href="" class="flex items-center font-semibold text-[16px]">Produk</a>
            <a href="" class="flex items-center font-semibold text-[16px]">Transaksi</a>
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

<div class="w-screen h-screen fixed pt-[85px] bg-black bg-opacity-30 z-[999] " id="container-profile">
    <div class="flex items-start bg-white overflow-auto h-[650px]">

        <aside class="fixed h-screen w-[340px] px-[40.32px] py-[47.41px] text-[#0A0A0B]">
            {{-- start: Side Menu --}}
            <div class="flex flex-col justify-between gap-[20.32px] rounded-[12.7px] border border-[#E5E5E5] py-[20.32px]">
                {{-- start: nav item --}}
                <button onclick="handleProfil()" class="pl-2">
                    <div class="flex items-center gap-[6.77px] px-[14px]">
                        <p class="font-semibold text-primary text-[20px]">Profil Pengguna</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                        {{-- if active remove hidden --}}
                    </div>
                </button>
                {{-- end: nav item --}}

                {{-- start: nav item --}}
                <button onclick="handleDaftarAlamat()" class="pl-2">
                    <div class="flex items-center gap-[6.77px] px-[14px]">
                        <p class="font-semibold text-[20px]">Alamat Penerima</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                        {{-- if active remove hidden --}}
                    </div>
                </button>
                {{-- end: nav item --}}

                {{-- start: nav item --}}
                <button onclick="handleTambahRekening()" class="pl-2">
                    <div class="flex items-center gap-[6.77px] px-[14px]">
                        <p class="font-semibold text-[20px]">Rekening</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                        {{-- if active remove hidden --}}
                    </div>
                </button>
                {{-- end: nav item --}}
                <div class="flex justify-center items-center">
                    <div class=" flex w-11/12 h-[1px] border justify-center "></div>

                </div>

                {{-- start: nav item --}}
                <a href="" class="pl-2">
                    <div class="flex items-center gap-[6.77px] px-[14px]">
                        <img class="w-6" src="{{ asset('images/icons/logout.svg') }}" alt="">
                        <p class="font-semibold text-[#E30613] text-[20px]">Keluar</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                        {{-- if active remove hidden --}}
                    </div>
                </a>
                {{-- end: nav item --}}



            </div>
            {{-- end: Side Menu --}}
        </aside>

        <!-- Tab Profile -->
        <div id="profil-pengguna" class=" w-[100%] pl-[380px] px-[44px] py-[47.41px] ">
            <p class="text-[32px] text-[#0A0A0B] font-semibold">Profil Pengguna </p>
            <div class="flex items-center justify-center flex-col rounded-2xl w-[100%] px-[24px] py-[24px] mt-7" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                <img src="{{ asset('images/icons/ellipse-4.svg') }}" alt="profile" class="mb-8 w-[112px]">
                <p class="text-[24px] text-[#0A0A0B] font-semibold">Faris Ku</p>
                <p class="text-[16px] text-[#0A0A0B] mb-[24px]">+62 858 0536 8655</p>

            </div>
            <div class="flex justify-between flex-col rounded-2xl w-[100%] px-[24px] py-[24px] mt-8 gap-8" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                <p class="text-[24px] text-[#0A0A0B] font-semibold ">Informasi Umum</p>
                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">Nama Lengkap</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">NIK</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="1234567890132456">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">Nomor HP</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="080808080808">
                    </div>
                </div>

                <p class="text-[24px] text-[#0A0A0B] font-semibold mt-8 ">Informasi Akun</p>
                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">Email</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="farisku@gmail.com">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#969EBA] font-semibold">Password</label>
                        <input type="password" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="12345678">
                    </div>
                </div>

                <button class="btn btn-primary w-[100%] font-semibold text-[20px]">Simpan</button>
            </div>
        </div>

        <!-- Tab Daftar Alamat -->
        <div id="daftar-alamat" class=" w-[100%] pl-[380px] px-[44px] py-[47.41px] hidden">
            <p class="text-[32px] text-[#0A0A0B] font-semibold">Daftar Alamat Pengiriman</p>
            <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-7 gap-6">
                <button class="btn btn-primary font-semibold text-[20px] text-white py-4 px-6 rounded-xl w-[312px]">Tambah Alamat Baru</button>
                <div class="flex justify-between flex-col rounded-2xl border border-primary bg-[#F2FFF5] w-[100%] h-[236px] px-[24px] py-[24px]">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col w-[806px] gap-6">
                            <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                            <div>
                                <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                                <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                                <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                            </div>
                            <div class="gap-6 pt-4">
                                <a href="" class="text-[16px] font-semibold text-primary mr-6">Ubah Alamat</a>
                                <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat Alamat</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary font-semibold text-[12px] text-white py-4 px-6 rounded-xl w-fit">Pilih</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] h-[236px] px-[24px] py-[24px]">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col w-[806px] gap-6">
                            <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                            <div>
                                <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                                <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                                <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                            </div>
                            <div class="gap-6 pt-4">
                                <a href="" class="text-[16px] font-semibold text-primary mr-6">Ubah Alamat</a>
                                <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat Alamat</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary font-semibold text-[12px] text-white py-4 px-6 rounded-xl w-fit">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Ubah Alamat -->
        <div id="ubah-alamat" class=" w-[100%] pl-[380px] px-[44px] py-[47.41px] hidden">
            <p class="text-[32px] text-[#0A0A0B] font-semibold">Ubah Alamat Pengiriman</p>
            <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-8 gap-8">

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Nama Penerima</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Nomor HP</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="1234567890132456">
                    </div>
                </div>

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Provinsi</label>
                        <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                            <option value="0">-- pilih provinsi tujuan --</option>
                            <option value="0">-- pilih provinsi tujuan --</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kota/Kabupaten</label>
                        <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                            <option value="0">-- pilih kota/kabupaten tujuan --</option>
                            <option value="0">-- pilih kota/kabupaten tujuan --</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kecamatan</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kode Pos</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="1234567890132456">
                    </div>
                </div>

                <div class="flex flex-col w-[100%]">
                    <label class="text-[20px] text-[#0A0A0B] font-semibold">Alamat Lengkap</label>
                    <textarea type="text" class="rounded-lg border border-[#969EBA] h-[130px] pl-3 py-2 text-[20px]" value="Alamat Saya Disini "></textarea>
                </div>
                <div class="flex">
                    <button class="btn btn-outline btn-error font-semibold text-[20px] w-fit mr-6">Batal</button>
                    <button class="btn btn-primary font-semibold text-[20px] w-fit">Simpan</button>

                </div>
            </div>
        </div>
        <!-- Tab Tambah Alamat -->
        <div id="tambah-alamat" class=" w-[100%] pl-[380px] px-[44px] py-[47.41px] hidden">
            <p class="text-[32px] text-[#0A0A0B] font-semibold">Tambah Alamat Pengiriman</p>
            <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-8 gap-8">

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Nama Penerima</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Nomor HP</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="1234567890132456">
                    </div>
                </div>

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Provinsi</label>
                        <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                            <option value="0">-- pilih provinsi tujuan --</option>
                            <option value="0">-- pilih provinsi tujuan --</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kota/Kabupaten</label>
                        <select class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                            <option value="0">-- pilih kota/kabupaten tujuan --</option>
                            <option value="0">-- pilih kota/kabupaten tujuan --</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-between ">
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kecamatan</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="Farisku">
                    </div>
                    <div class="flex flex-col w-[472px]">
                        <label class="text-[20px] text-[#0A0A0B] font-semibold">Kode Pos</label>
                        <input type="text" class="rounded-lg border border-[#969EBA] h-[50px] flex pl-3 text-[20px]" placeholder="1234567890132456">
                    </div>
                </div>

                <div class="flex flex-col w-[100%]">
                    <label class="text-[20px] text-[#0A0A0B] font-semibold">Alamat Lengkap</label>
                    <textarea type="text" class="rounded-lg border border-[#969EBA] h-[130px] pl-3 py-2 text-[20px]" placeholder="Alamat Saya Disini "></textarea>
                </div>
                <div class="flex">
                    <button class="btn btn-outline btn-error font-semibold text-[20px] w-fit mr-6">Batal</button>
                    <button class="btn btn-primary font-semibold text-[20px] w-fit">Simpan</button>

                </div>
            </div>
        </div>
        <!-- Tab Rekening -->
        <div id="rekening" class=" w-[100%] pl-[380px] px-[44px] py-[47.41px] hidden">
            <p class="text-[32px] text-[#0A0A0B] font-semibold">Rekening Anda</p>
            <div class="flex justify-between flex-col rounded-2xl border border-[#E5E5E5] w-[100%] px-[24px] py-[24px] mt-7">
                <div class="flex justify-between flex-col rounded-2xl border border-primary bg-[#F2FFF5] w-[100%] px-[24px] py-[24px]">
                    <div class="flex items-center">
                        <img src="{{asset('images/icons/card.svg')}}" alt="icon" class="px-6">
                        <div class="flex flex-col w-[806px] h-[208px] gap-8">
                            <div class="flex flex-col w-[100%]">
                                <label class="text-[20px] text-[#969EBA] font-semibold">Pemilik Rekening</label>
                                <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px]" value="Farisku">
                            </div>
                            <div class="flex justify-between W-[100%]">
                                <div class="flex flex-col w-[387px]]">
                                    <label class="text-[20px] text-[#969EBA] font-semibold">Bank</label>
                                    <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px] w-[387px]" value="BNI">
                                </div>
                                <div class="flex flex-col w-[387px]">
                                    <label class="text-[20px] text-[#969EBA] font-semibold">No Rekening</label>
                                    <input type="text" class="rounded-2xl border bg-transparent border-[#969EBA] h-[50px] flex pl-3 text-[20px] w-[387px]" value="1234567890132456">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-3">
                        <button class="btn font-semibold text-[12px] text-[#969EBA] py-4 px-6 rounded-xl w-fit">Ganti Rekening</button>
                    </div>
                </div>



            </div>
        </div>
    </div>


</div>

<script>
    let currentTab = "profil-pengguna"
    let tabProfil = document.getElementById("profil-pengguna")
    let tabDaftarAlamat = document.getElementById("daftar-alamat")
    let tabTambahAlamat = document.getElementById("tambah-alamat")
    let tabUbahAlamat = document.getElementById("ubah-alamat")
    let tabRekening = document.getElementById("rekening")
    const handleProfil = () => {
        tabProfil.classList.remove('hidden')

        if (tabDaftarAlamat.classList.contains('hidden')) {} else {
            tabDaftarAlamat.classList.remove('hidden')
        }
        if (tabTambahAlamat.classList.contains('hidden')) {} else {
            tabTambahAlamat.classList.remove('hidden')
        }
        if (tabUbahAlamat.classList.contains('hidden')) {} else {
            tabUbahAlamat.classList.remove('hidden')
        }
        if (tabRekening.classList.contains('hidden')) {} else {
            tabRekening.classList.remove('hidden')
        }
    }
    const handleDaftarAlamat = () => {
        tabDaftarAlamat.classList.contains('hidden')

        if (tabProfil.classList.contains('hidden')) {} else {
            tabProfil.classList.remove('hidden')
        }
        if (tabTambahAlamat.classList.contains('hidden')) {} else {
            tabTambahAlamat.classList.remove('hidden')
        }
        if (tabUbahAlamat.classList.contains('hidden')) {} else {
            tabUbahAlamat.classList.remove('hidden')
        }
        if (tabRekening.classList.contains('hidden')) {} else {
            tabRekening.classList.remove('hidden')
        }
    }
    const handleTambahAlamat = () => {
        tabTambahAlamat.classList.contains('hidden')

        if (tabProfil.classList.contains('hidden')) {} else {
            tabProfil.classList.remove('hidden')
        }
        if (tabDaftarAlamat.classList.contains('hidden')) {} else {
            tabDaftarAlamat.classList.remove('hidden')
        }
        if (tabUbahAlamat.classList.contains('hidden')) {} else {
            tabUbahAlamat.classList.remove('hidden')
        }
        if (tabRekening.classList.contains('hidden')) {} else {
            tabRekening.classList.remove('hidden')
        }
    }
    const handleUbahAlamat = () => {
        tabUbahAlamat.classList.contains('hidden')

        if (tabProfil.classList.contains('hidden')) {} else {
            tabProfil.classList.remove('hidden')
        }
        if (tabTambahAlamat.classList.contains('hidden')) {} else {
            tabTambahAlamat.classList.remove('hidden')
        }
        if (tabDaftarAlamat.classList.contains('hidden')) {} else {
            tabDaftarAlamat.classList.remove('hidden')
        }
        if (tabRekening.classList.contains('hidden')) {} else {
            tabRekening.classList.remove('hidden')
        }
    }
    const handleRekening = () => {
        tabRekening.classList.contains('hidden')

        if (tabProfil.classList.contains('hidden')) {} else {
            tabProfil.classList.remove('hidden')
        }
        if (tabTambahAlamat.classList.contains('hidden')) {} else {
            tabTambahAlamat.classList.remove('hidden')
        }
        if (tabUbahAlamat.classList.contains('hidden')) {} else {
            tabUbahAlamat.classList.remove('hidden')
        }
        if (tabDaftarAlamat.classList.contains('hidden')) {} else {
            tabDaftarAlamat.classList.remove('hidden')
        }
    }
</script>