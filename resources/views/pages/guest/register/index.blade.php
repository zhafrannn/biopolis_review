@extends('layouts.guest')

@section('content')
    <section class="grid grid-cols-2 px-[120px]">
        <div class="h-full overflow-hidden">
            <h1 class="mb-[60px] w-[427px] text-[32px] font-semibold">Daftar dulu ya, sebelum lanjut checkout!</h1>
            <div class="flex h-full pl-3">
                {{-- Line --}}
                <div class="boder relative h-full w-[1px] bg-[#D9D9D9]">
                    <div
                        class="mb-[1580px] flex h-5 w-5 -translate-x-[9px] items-center justify-center rounded-full bg-[#D9D9D9] bg-opacity-30">
                        <div class="h-3 w-3 rounded-full bg-[#D9D9D9]"></div>
                    </div>
                    <div
                        class="mb-[550px] flex h-5 w-5 -translate-x-[9px] items-center justify-center rounded-full bg-[#D9D9D9] bg-opacity-30">
                        <div class="h-3 w-3 rounded-full bg-[#D9D9D9]"></div>
                    </div>
                    <div
                        class="mb-[430px] flex h-5 w-5 -translate-x-[9px] items-center justify-center rounded-full bg-[#D9D9D9] bg-opacity-30">
                        <div class="h-3 w-3 rounded-full bg-[#D9D9D9]"></div>
                    </div>
                    <div
                        class="flex h-5 w-5 -translate-x-[9px] items-center justify-center rounded-full bg-[#D9D9D9] bg-opacity-30">
                        <div class="h-3 w-3 rounded-full bg-[#D9D9D9]"></div>
                    </div>
                </div>
                {{-- End: Line --}}
                <div class="flex-1 pl-[103px]">
                    <form action="">
                        <div class="mb-[30px] w-[472px] border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9]">
                            <p>Langkah 1</p>
                        </div>
                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">NIK</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan NIK">
                        </div>
                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">No Whatsapp</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan No Whatsapp">
                        </div>
                        <div class="mb-[30px] w-[472px] border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9]">
                            <p>Alamat</p>
                        </div>
                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Provinsi</label>
                            <select name="" id="" class="rounded-[15px] border p-4">
                                <option value="">asd</option>
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Kota/Kabupaten</label>
                            <select name="" id="" class="rounded-[15px] border p-4">
                                <option value="">asd</option>
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Alamat Lengkap</label>
                            <textarea name="" id="" cols="30" rows="10" class="h-[137px] rounded-[15px] border p-4"></textarea>
                        </div>

                        {{-- Divider --}}
                        <div class="mb-[35px] w-[472px] border"></div>
                        {{-- end: Divider --}}

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Email">
                        </div>
                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Password</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Password">
                        </div>

                        <div class="mb-[120px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Konfirmasi Password</label>
                            <input type="text" class="rounded-[15px] border p-4"
                                placeholder="Masukan Konfirmasi Password">
                        </div>


                        <div class="mb-[30px] w-[472px] border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9]">
                            <p>Langkah 2</p>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Bank</label>
                            <select name="" id="" class="rounded-[15px] border p-4">
                                <option value="">bank</option>
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nomor Rekening</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Nomor Rekening">
                        </div>

                        <div class="mb-[120px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Rekening</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Nama Rekening">
                        </div>

                        <div class="mb-[30px] w-[472px] border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9]">
                            <p>Langkah 3</p>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Kontak Darurat</label>
                            <input type="text" class="rounded-[15px] border p-4"
                                placeholder="Masukan Nama Kontak Darurat">
                        </div>

                        <div class="mb-[120px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Kontak Darurat / Ahli
                                Waris</label>
                            <input type="text" class="rounded-[15px] border p-4"
                                placeholder="Masukan Kontak Darurat / Ahli Waris">
                        </div>


                        <div class="mb-[30px] w-[472px] border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9]">
                            <p>Langkah 4</p>
                        </div>

                        <div class="mb-[30px] flex w-[472px] flex-col">
                            <label for="" class="mb-[16px] text-[24px] font-semibold text-primary">Kode
                                Referal</label>
                            <input type="text" class="rounded-[15px] border border-primary p-4"
                                placeholder="Masukan Kode Referal">
                        </div>

                        <div>
                            <button class="rounded-[15px] bg-primary px-[214px] py-[14px] text-white">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="fixed right-[12.5%] top-[55%] -translate-y-1/2">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/img-hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>



    {{-- <section class="mb-[75px] flex items-center justify-between px-[120px]">

        <div class="grid grid-cols-2">
            <div class="border">asd</div>
            <div class="border">asd</div>
        </div>

        <div class="w-[633px]">
            <h1 class="mb-[60px] w-[427px] text-[32px] font-semibold">Selamat datang kembali, silahkan masuk</h1>
            <div class="mb-[50px]">
                <form action="">
                    <div class="mb-[30px] flex w-[472px] flex-col">
                        <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                        <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Email">
                    </div>
                    <div class="mb-[50px] flex w-[472px] flex-col">
                        <label for="" class="mb-[16px] text-[24px] font-semibold">Password</label>
                        <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Password">
                        <div class="flex justify-end">
                            <a href=""><small class="text-primary">Lupa password?</small></a>
                        </div>
                    </div>
                    <div>
                        <button class="rounded-[15px] bg-primary px-[214px] py-[14px] text-white">Login</button>
                    </div>
                </form>
            </div>
            <div class="flex w-[427px] justify-center text-center">
                <div>
                    <a href="{{ url('/register') }}">
                        Belum bisa login? Silahkan <span class="font-semibold">Registrasi</span> terlebih dahulu
                    </a>
                </div>
            </div>
        </div>


    </section> --}}
@endsection
