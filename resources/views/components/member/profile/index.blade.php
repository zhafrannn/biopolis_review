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
                                <p class="text-[20px] font-semibold hover:text-primary text-primary" id="tab-text-profil">Profil Pengguna</p>
                                {{-- if active remove hidden --}}
                                <div class="absolute left-0 w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                                {{-- if active remove hidden --}}
                            </div>
                        </button>
                        {{-- end: nav item --}}

                        {{-- start: nav item --}}
                        <button onclick="handleRekening()" class="pl-2">
                            <div class="flex items-center gap-[6.77px] px-[14px]">
                                <p class="text-[20px] font-semibold hover:text-primary" id="tab-text-rekening">Rekening</p>
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
                            <img src="{{ asset('images/profile.png') }}" alt="profile" class="mb-5 w-[80px]">
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
                                    <input type="number" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="nik" value="{{ Auth::user()->user_biodata->nik }}">
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Nomor WhatsApp</label>
                                    <input type="number" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="no_whatsapp" value="{{ Auth::user()->user_biodata->no_whatsapp }}">
                                </div>
                            </div>
                            <p class="mt-8 text-[24px] font-semibold text-[#0A0A0B]">Informasi Alamat Pengiriman</p>
                            <div class="flex justify-between">
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Provinsi</label>
                                    <select id="provincy-select" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="provinsi">
                                    </select>
                                </div>
                                <div class="flex w-[472px] flex-col">
                                    <label class="text-[20px] font-semibold text-[#969EBA]">Kota</label>
                                    <select id="city-select" class="flex h-[50px] rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="kota">
                                    </select>
                                </div>
                            </div>
                            <div class="flex w-full flex-col">
                                <label class="flex text-start text-[20px] font-semibold text-[#969EBA]">Alamat Lengkap</label>
                                <textarea rows="5" class="rounded-lg border border-[#969EBA] pl-3 text-[20px]" name="alamat_lengkap">{{Auth::user()->user_biodata->alamat_lengkap}}</textarea>
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

                            <button class="btn btn-primary w-[100%] text-[20px] font-semibold" type="submit">Ubah Profile</button>
                        </div>
                    </form>
                </div>
                <!-- End Profile -->

                <!-- Tab Rekening -->
                <div id="rekening" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
                    <p class="text-[32px] font-semibold text-[#0A0A0B]">Rekening Anda</p>
                    <div class="mt-7 flex w-[100%] flex-col justify-between rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">
                        <div class="flex w-[100%] flex-col justify-between rounded-2xl border border-primary bg-[#F2FFF5] px-[24px] py-[24px]">
                            <form action="{{ route('bank')}}" method="POST">
                                @csrf
                                <div class="flex items-center">
                                    <img src="{{ asset('images/icons/card.svg') }}" alt="icon" class="px-6">
                                    <div class="flex h-[208px] w-[806px] flex-col gap-8">
                                        <div class="flex w-[100%] flex-col">
                                            <label class="text-[20px] font-semibold text-[#969EBA]">Pemilik
                                                Rekening</label>
                                            <select type="text" class="flex h-[50px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" name="nama_rekening">
                                                <option value="bca" @if(Auth::user()->user_biodata->nama_bank=='bca') selected @endif>Bank Central Asia (BCA)</option>
                                                <option value="mandiri" @if(Auth::user()->user_biodata->nama_bank=='mandiri') selected @endif>Mandiri</option>
                                                <option value="bri" @if(Auth::user()->user_biodata->nama_bank=='bri') selected @endif>Bank Rakyat Indonesia (BRI)</option>
                                                <option value="bni" @if(Auth::user()->user_biodata->nama_bank=='bni') selected @endif>Bank Negara Indonesia (BNI)</option>
                                                <option value="bsi" @if(Auth::user()->user_biodata->nama_bank=='bsi') selected @endif>Bank Syariah Indonesia (BSI)</option>
                                                <option value="cimb" @if(Auth::user()->user_biodata->nama_bank=='cimb') selected @endif>Cimb Niaga</option>
                                                <option value="btn" @if(Auth::user()->user_biodata->nama_bank=='btn') selected @endif>Bank Tabungan Negara (BTN)</option>
                                                <option value="danamon" @if(Auth::user()->user_biodata->nama_bank=='danamon') selected @endif>Danamon</option>
                                            </select>
                                        </div>
                                        <div class="W-[100%] flex justify-between">
                                            <div class="w-[387px]] flex flex-col">
                                                <label class="text-[20px] font-semibold text-[#969EBA]">Bank</label>
                                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->nama_bank }}" name="nama_bank">
                                            </div>
                                            <div class="flex w-[387px] flex-col">
                                                <label class="text-[20px] font-semibold text-[#969EBA]">No Rekening</label>
                                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->no_rekening }}" name="no_rekening">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 flex justify-end">
                                    <button class="btn w-fit rounded-xl px-6 py-4 text-[12px] font-semibold text-[#969EBA]" type="submit">Ganti
                                        Rekening</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="font-bold p-[12px_20px] absolute right-6 top-5 text-[#E30613]" onclick="HandleClose()">
                <button>Kembali</button>
            </div>
        </div>
    </div>
</div>