{{-- Navbar for desktop --}}
<nav class="fixed left-0 top-0 z-[500] hidden lg:flex h-[84px] w-[100%] items-center justify-between bg-white shadow-md">
    <div class="m-5 flex w-[867px] items-center pl-5">
        <a href="{{ url('/user/dashboard') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]">
        </a>
        <div class="ml-[64px] flex h-[80px] w-[400px] items-center justify-between">
            <a href="{{ url('/user/dashboard') }}" class="active flex items-center text-[16px] font-semibold">Dashboard</a>
            <a href="{{ url('/member/product') }}" class="flex items-center text-[16px] font-semibold">Produk</a>
            <a href="{{ url('/member/transaction') }}" class="flex items-center text-[16px] font-semibold">Transaksi</a>
        </div>
    </div>

    <div class="flex items-center gap-[32px] pr-10">
        {{-- Notification --}}
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/image/icon/notification.svg') }}" alt="">

        </div>
        {{-- End Notification --}}
        {{-- Profile --}}
        <div class="flex items-center gap-[16px]">


            <div class="dropdown-end dropdown">
                <button tabindex="0" class="btn border-0 bg-white hover:border-0 hover:bg-white">
                    <img src="{{ asset('icons/bell-rounded.svg') }}" alt="">
                </button>
                <ul tabindex="0" class="menu dropdown-content rounded-box z-[1] w-96 bg-base-100 p-2 shadow">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-2" id="notication-container"></div>
                        <div>
                            <a href="">Lihat Semua</a>
                        </div>
                    </div>
                </ul>
            </div>

            <div class="flex cursor-pointer items-center gap-[8px]" onclick="HandleClose()">
                <div tabindex="0" class="m-1 flex cursor-pointer items-center">
                    <img src="{{ asset('images/icons/sample-avatar-profile.svg') }}" alt="">
                    <p class="ml-[13.54px] text-[16.93px] font-semibold">{{ Auth::user()->name }}</p>
                    <img src="{{ asset('images/icon/arrow-down.svg') }}" class="ml-[6.77px]" alt="">
                </div>

            </div>
        </div>
        {{-- End Profile --}}
    </div>

</nav>

<div class="fixed z-[999] hidden h-screen w-screen bg-black bg-opacity-30 pt-[85px]" id="container-profile">
    <div class="relative h-full w-screen">
        <div class="absolute bottom-0 left-0 flex h-[650px] w-full items-start overflow-auto rounded-t-[30px] bg-white">
            <div class="relative">
                <aside class="fixed h-screen w-[340px] px-[40.32px] py-[47.41px] text-[#0A0A0B]">
                    {{-- start: Side Menu --}}
                    <div class="flex flex-col justify-between gap-[20.32px] rounded-[12.7px] border border-[#E5E5E5] py-[20.32px]">
                        {{-- start: nav item --}}
                        <button onclick="handleProfil()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold text-primary">Profil Pengguna</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button>
                        {{-- end: nav item --}}

                        {{-- start: nav item --}}
                        <!-- <button onclick="handleDaftarAlamat()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold">Alamat Penerima</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button> -->
                        {{-- end: nav item --}}

                        {{-- start: nav item --}}
                        <button onclick="handleRekening()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold">Rekening</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button>
                        {{-- end: nav item --}}
                        <div class="flex items-center justify-center">
                            <div class="flex h-[1px] w-11/12 justify-center border"></div>

                        </div>

                        {{-- start: nav item --}}
                        <a href="" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <img class="w-6" src="{{ asset('images/icons/logout.svg') }}" alt="">
                                <a href="{{ url('/logout') }}">
                                    <p class="text-[20px] font-semibold text-[#E30613]">Logout</p>
                                </a>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 hidden w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </a>
                        {{-- end: nav item --}}
                    </div>
                    {{-- end: Side Menu --}}
                </aside>

                <!-- Tab Profile -->
                <div id="profil-pengguna" class="w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <form action="{{ url('/member/profile/update/'. Auth::user()->id) }}" method="post">
                        @csrf
                        <p class="text-[32px] font-semibold text-[#0A0A0B]">Profil Pengguna </p>
                        <div class="mt-7 flex w-[100%] flex-col items-center justify-center rounded-2xl px-[24px] py-[24px]" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                            <img src="{{ asset('images/icons/ellipse-4.svg') }}" alt="profile" class="mb-8 w-[112px]">
                            <p class="text-[24px] font-semibold text-[#0A0A0B]">{{ Auth::user()->name }}</p>
                            <p class="mb-[24px] text-[16px] text-[#0A0A0B]">{{ Auth::user()->user_biodata->no_whatsapp }}</p>

                        </div>
                        <div class="mt-8 flex w-[100%] flex-col justify-between gap-8 rounded-2xl px-[24px] py-[24px]" style="box-shadow: 0px 4px 15px 7px rgba(0, 0, 0, 0.15);">
                            <p class="text-[24px] font-semibold text-[#0A0A0B]">Informasi Umum</p>
                            <div class="flex justify-between gap-5">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Nama Lengkap</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="name" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">NIK</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="nik" value="{{ Auth::user()->user_biodata->nik }}">
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Nomor HP</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="no_whatsapp" value="{{ Auth::user()->user_biodata->no_whatsapp }}">
                                </div>
                            </div>

                            <p class="mt-8 text-[24px] font-semibold text-[#0A0A0B]">Informasi Alamat Pengiriman</p>
                            <div class="flex justify-between">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Provinsi</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="provinsi" value="{{ Auth::user()->user_biodata->provinsi }}">
                                </div>
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Kota/Kabupaten</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="kota" value="{{ Auth::user()->user_biodata->provinsi }}">
                                </div>
                            </div>
                            <div class="flex w-full flex-col">
                                <label class="flex text-start text-[20px] font-semibold text-[#969EBA]">Alamat Lengkap</label>
                                <textarea rows="5" class="rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="alamat">{{Auth::user()->user_biodata->alamat_lengkap}}</textarea>
                            </div>

                            <p class="mt-8 text-[24px] font-semibold text-[#0A0A0B]">Informasi Akun</p>
                            <div class="flex justify-between">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Email</label>
                                    <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Ubah Password</label>
                                    <input type="password" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="password" value="">
                                </div>
                            </div>

                            <button class="btn btn-primary w-[100%] text-[20px] font-semibold" type="submit">Simpan</button>

                        </div>
                    </form>
                </div>

                <!-- Tab Daftar Alamat -->
                <!-- <div id="daftar-alamat" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <p class="text-[32px] font-semibold text-[#0A0A0B]">Daftar Alamat Pengiriman</p>
                    <div class="mt-7 flex w-[100%] flex-col justify-between gap-6 rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">
                        <button class="btn btn-primary w-[312px] rounded-xl px-6 py-4 text-[20px] font-semibold text-white">Tambah
                            Alamat Baru</button>

                        <div class="flex h-[236px] w-[100%] flex-col justify-between rounded-2xl border border-primary bg-[#F2FFF5] px-[24px] py-[24px]">
                            <div class="flex items-center justify-between">
                                <div class="flex w-[806px] flex-col gap-6">
                                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                                    <div>
                                        <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                                        <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                                        <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                                    </div>
                                    <div class="gap-6 pt-4">
                                        <a href="" class="mr-6 text-[16px] font-semibold text-primary">Ubah
                                            Alamat</a>
                                        <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat
                                            Alamat</a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-fit rounded-xl px-6 py-4 text-[12px] font-semibold text-white">Pilih</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex h-[236px] w-[100%] flex-col justify-between rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">
                            <div class="flex items-center justify-between">
                                <div class="flex w-[806px] flex-col gap-6">
                                    <p class="text-[16px] font-semibold text-[#0A0A0B]">Alamat Rumah</p>
                                    <div>
                                        <p class="text-[16px] font-semibold text-[#0A0A0B]">Faris Ku</p>
                                        <p class="text-[16px] text-[#0A0A0B]">+62 858 0536 8655</p>
                                        <p class="text-[16px] text-[#0A0A0B]">Alamat Rumah Saya Disini</p>
                                    </div>
                                    <div class="gap-6 pt-4">
                                        <a href="" class="mr-6 text-[16px] font-semibold text-primary">Ubah
                                            Alamat</a>
                                        <a href="" class="text-[16px] font-semibold text-[#E30613]">Alamat
                                            Alamat</a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-fit rounded-xl px-6 py-4 text-[12px] font-semibold text-white">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Tab Ubah Alamat -->
                <!-- <div id="ubah-alamat" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <p class="text-[32px] font-semibold text-[#0A0A0B]">Ubah Alamat Pengiriman</p>
                    <div class="mt-8 flex w-[100%] flex-col justify-between gap-8 rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Nama Penerima</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="Farisku">
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Nomor HP</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="1234567890132456">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Provinsi</label>
                                <select class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="Farisku">
                                    <option value="0">-- pilih provinsi tujuan --</option>
                                    <option value="0">-- pilih provinsi tujuan --</option>
                                </select>
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kota/Kabupaten</label>
                                <select class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="Farisku">
                                    <option value="0">-- pilih kota/kabupaten tujuan --</option>
                                    <option value="0">-- pilih kota/kabupaten tujuan --</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kecamatan</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="Farisku">
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kode Pos</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" value="1234567890132456">
                            </div>
                        </div>

                        <div class="flex w-[100%] flex-col">
                            <label class="text-[20px] font-semibold text-[#0A0A0B]">Alamat Lengkap</label>
                            <textarea type="text" class="h-[130px] rounded-lg border border-[#969EBA] py-2 pl-3 text-[20px]" value="Alamat Saya Disini "></textarea>
                        </div>
                        <div class="flex">
                            <button class="btn btn-error btn-outline mr-6 w-fit text-[20px] font-semibold">Batal</button>
                            <button class="btn btn-primary w-fit text-[20px] font-semibold">Simpan</button>

                        </div>
                    </div>
                </div> -->
                <!-- Tab Tambah Alamat -->
                <!-- <div id="tambah-alamat" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <p class="text-[32px] font-semibold text-[#0A0A0B]">Tambah Alamat Pengiriman</p>
                    <div class="mt-8 flex w-[100%] flex-col justify-between gap-8 rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Nama Penerima</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="Farisku">
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Nomor HP</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="1234567890132456">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Provinsi</label>
                                <select class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="Farisku">
                                    <option value="0">-- pilih provinsi tujuan --</option>
                                    <option value="0">-- pilih provinsi tujuan --</option>
                                </select>
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kota/Kabupaten</label>
                                <select class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="Farisku">
                                    <option value="0">-- pilih kota/kabupaten tujuan --</option>
                                    <option value="0">-- pilih kota/kabupaten tujuan --</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kecamatan</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="Farisku">
                            </div>
                            <div class="flex w-[472px] flex-col">
                                <label class="text-[20px] font-semibold text-[#0A0A0B]">Kode Pos</label>
                                <input type="text" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" placeholder="1234567890132456">
                            </div>
                        </div>

                        <div class="flex w-[100%] flex-col">
                            <label class="text-[20px] font-semibold text-[#0A0A0B]">Alamat Lengkap</label>
                            <textarea type="text" class="h-[130px] rounded-lg border border-[#969EBA] py-2 pl-3 text-[20px]" placeholder="Alamat Saya Disini "></textarea>
                        </div>
                        <div class="flex">
                            <button class="btn btn-error btn-outline mr-6 w-fit text-[20px] font-semibold">Batal</button>
                            <button class="btn btn-primary w-fit text-[20px] font-semibold">Simpan</button>

                        </div>
                    </div>
                </div> -->
                <!-- Tab Rekening -->
                <div id="rekening" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <form action="">
                        <p class="text-[32px] font-semibold text-[#0A0A0B]">Rekening Anda</p>
                        <div class="mt-7 flex w-[100%] flex-col justify-between rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">
                            <div class="flex w-[100%] flex-col justify-between rounded-2xl border border-primary bg-[#F2FFF5] px-[24px] py-[24px]">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/icons/card.svg') }}" alt="icon" class="px-6">
                                    <div class="flex h-[208px] w-[806px] flex-col gap-8">
                                        <div class="flex w-[100%] flex-col">
                                            <label class="text-[20px] font-semibold text-[#969EBA]">Pemilik
                                                Rekening</label>
                                            <input type="text" class="flex h-[50px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->nama_rekening }}" readonly>
                                        </div>
                                        <div class="W-[100%] flex justify-between">
                                            <div class="w-[387px]] flex flex-col">
                                                <label class="text-[20px] font-semibold text-[#969EBA]">Bank</label>
                                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->nama_bank }}" readonly>
                                            </div>
                                            <div class="flex w-[387px] flex-col">
                                                <label class="text-[20px] font-semibold text-[#969EBA]">No Rekening</label>
                                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->no_rekening }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mt-3 flex justify-end">
                                    <button class="btn w-fit rounded-xl px-6 py-4 text-[12px] font-semibold text-[#969EBA]">Ganti
                                        Rekening</button>
                                </div> -->
                            </div>
                    </form>


                </div>
            </div>

            <div class="bg-[#E30613] rounded-lg p-[12px_20px] absolute right-6 top-5 text-white" onclick="HandleClose()">
                <button>Keluar</button>
            </div>
        </div>
    </div>


</div>
</div>

<nav class="lg:hidden fixed left-0 -top-[3px] z-[900] flex w-[100%] items-center justify-between bg-white shadow-md">
    <div class="flex w-full justify-between items-center px-5 py-[10px]">
        <a href="{{ url('/user/dashboard') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-[63px]">
        </a>
        <div class="flex items-center justify-between">

            {{-- Notification --}}
            <button type="button" class="flex items-center justify-center">
                <img src="{{ asset('assets/image/icon/notification.svg') }}" alt="">
            </button>
            {{-- End Notification --}}
            <button type="button" onclick="HandleButton()" id="navbar-button">
                <img src="{{ asset('images/icons/menu.svg') }}" alt="">
            </button>
            @include('components.member.sidebar-mobile')
        </div>
    </div>
</nav>

{{-- Notification --}}
<script>
    $(document).ready(function() {
        setInterval(() => {
            $.ajax({
                url: 'http://localhost:8000/api/notification/user/{{ Auth::user()->id }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    let element = '';
                    data && data.map((item, index) => {
                        element += `
                    <div>
                        <p>${item.description}</p>
                    </div>
                `
                    })
                    $('#notication-container').html(element)
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }, 10000)
    });
</script>

{{-- Tab Profile --}}
<script>
    let currentTab = "profil-pengguna"
    let navbarModal = document.getElementById("container-profile")

    let tabProfil = document.getElementById("profil-pengguna")
    let tabDaftarAlamat = document.getElementById("daftar-alamat")
    let tabTambahAlamat = document.getElementById("tambah-alamat")
    let tabUbahAlamat = document.getElementById("ubah-alamat")
    let tabRekening = document.getElementById("rekening")

    const HandleClose = () => {
        navbarModal.classList.toggle('hidden')
    }

    const handleProfil = () => {

        tabProfil.classList.remove('hidden')

        if (!tabDaftarAlamat.classList.contains('hidden')) {
            tabDaftarAlamat.classList.add('hidden')
        }

        if (!tabRekening.classList.contains('hidden')) {
            tabRekening.classList.add('hidden')
        }
    }
    const handleDaftarAlamat = () => {

        tabDaftarAlamat.classList.remove('hidden')

        if (!tabProfil.classList.contains('hidden')) {
            tabProfil.classList.add('hidden')
        }

        if (!tabRekening.classList.contains('hidden')) {
            tabRekening.classList.add('hidden')
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
        tabRekening.classList.remove('hidden')

        if (!tabProfil.classList.contains('hidden')) {
            tabProfil.classList.add('hidden')
        }

        if (!tabDaftarAlamat.classList.contains('hidden')) {
            tabDaftarAlamat.classList.add('hidden')
        }
    }
</script>