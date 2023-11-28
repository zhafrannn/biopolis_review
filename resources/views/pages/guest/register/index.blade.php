@extends('layouts.guest')

@section('content')
    <section class="grid grid-cols-1 px-5 py-[80px] lg:grid-cols-2 lg:px-[120px]">

        <div class="fixed -right-[1000px] top-24 z-[999] w-fit transition-all duration-300" id="alert">
            <div class="alert alert-error relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <span>Terjadi kesalahan data yang anda masukan salah</span>

                <button class="flex h-5 w-5 items-center justify-center rounded-full bg-white bg-opacity-50 font-bold"
                    onclick="CloseAlert()">x</button>
            </div>
        </div>

        <div class="h-full w-full lg:overflow-hidden">
            <h1 class="mb-[60px] w-full text-[32px] font-semibold lg:w-[400px]">Daftar dulu ya, sebelum lanjut checkout!
            </h1>
            <div class="flex h-full pl-0 lg:pl-3">
                {{-- Line --}}
                <div class="boder relative hidden h-full w-[1px] bg-[#D9D9D9] lg:block">
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

                <div class="w-full lg:flex-1 lg:pl-[103px]">
                    <form action="{{ url('/register') }}" method="post">

                        @csrf
                        <div class="mb-[30px] w-full border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9] lg:w-[400px]">
                            <p>Langkah 1</p>
                        </div>
                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Nama"
                                name="name" required>

                        </div>
                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">NIK</label>
                            <input type="number" class="rounded-[15px] border p-4" placeholder="Masukan NIK" name="nik"
                                required>
                        </div>
                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">No Whatsapp</label>
                            <input type="text" class="rounded-[15px] border p-4" name="no_whatsapp"
                                placeholder="Masukan No Whatsapp" required>
                        </div>
                        <div class="mb-[30px] w-full border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9] lg:w-[400px]">
                            <p>Alamat</p>
                        </div>
                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Provinsi</label>
                            <select id="provincy-select" class="rounded-[15px] border p-4" name="provinsi" required>
                                @foreach ($provincies as $item)
                                    <option value="{{ $item['id'] }}-{{ $item['province_name'] }}">
                                        {{ $item['province_name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Kota/Kabupaten</label>
                            <select id="city-select" class="rounded-[15px] border p-4" name="kota" required>
                                @foreach ($cities as $item)
                                    <option value="{{ $item['city_id'] }}-{{ $item['city_name'] }}">
                                        {{ $item['city_name'] }} ({{ $item['type'] }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Alamat Lengkap</label>
                            <textarea id="" cols="30" name="alamat_lengkap" rows="10"
                                class="h-[137px] rounded-[15px] border p-4"></textarea>
                        </div>

                        {{-- Divider --}}
                        <div class="mb-[35px] w-full border lg:w-[400px]"></div>
                        {{-- end: Divider --}}

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                            <input type="email" class="rounded-[15px] border p-4" placeholder="Masukan Email"
                                name="email">
                        </div>
                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Password</label>
                            <input type="password" class="rounded-[15px] border p-4" placeholder="Masukan Password"
                                name="password">
                        </div>

                        <div class="mb-[120px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Konfirmasi Password</label>
                            <input type="password" class="rounded-[15px] border p-4"
                                placeholder="Masukan Konfirmasi Password" name="confirmation_password">
                        </div>


                        <div class="mb-[30px] w-full border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9] lg:w-[400px]">
                            <p>Langkah 2</p>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Bank</label>
                            <select name="nama_bank" id="" class="rounded-[15px] border p-4" required>
                                <option value="bca">Bank Central Asia (BCA)</option>
                                <option value="mandiri">Mandiri</option>
                                <option value="bri">Bank Rakyat Indonesia (BRI)</option>
                            </select>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nomor Rekening</label>
                            <input type="number" class="rounded-[15px] border p-4" placeholder="Masukan Nomor Rekening"
                                name="no_rekening" required>
                        </div>

                        <div class="mb-[120px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Rekening</label>
                            <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Nama Rekening"
                                name="nama_rekening" required>
                        </div>

                        <div
                            class="mb-[30px] w-full border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9] lg:w-[400px]">
                            <p>Langkah 3</p>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Nama Kontak Darurat</label>
                            <input type="text" class="rounded-[15px] border p-4"
                                placeholder="Masukan Nama Kontak Darurat" name="nama_kontak_darurat" required>
                        </div>

                        <div class="mb-[120px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold">Kontak Darurat / Ahli
                                Waris</label>
                            <input type="number" class="rounded-[15px] border p-4"
                                placeholder="Masukan Nomor Kontak Darurat / Ahli Waris" name="nomor_kontak_darurat"
                                required>
                        </div>


                        <div
                            class="mb-[30px] w-full border-b pb-[6px] text-[20px] font-medium text-[#D9D9D9] lg:w-[400px]">
                            <p>Langkah 4</p>
                        </div>

                        <div class="mb-[30px] flex w-full flex-col lg:w-[400px]">
                            <label for="" class="mb-[16px] text-[24px] font-semibold text-primary">Kode
                                Referal</label>
                            <input type="text" class="rounded-[15px] border border-primary p-4"
                                placeholder="Masukan Kode Referal" name="kode_referal" id="referralCode" required>
                        </div>

                        <div class="lg:w-[400px]">
                            <button type="submit" class="btn btn-primary w-full">Daftar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="relative hidden lg:block">
            <div class="sticky right-1/2 top-0 w-full pt-[100px]">
                <img src="{{ asset('images/img-hero.png') }}" class="translate-x-[150px]" alt="">
            </div>
        </div>
    </section>

    @if ($errors->any())
        <script>
            document.getElementById('alert').style.right = '100px';
            const CloseAlert = () => {
                document.getElementById('alert').style.right = '-1000px';
            }
        </script>
    @endif


    <script>
        let cityArrayData = @json($cities);
        let provinceArrayData = @json($provincies);
        let showCity = [];

        $('#provincy-select').on('change', (e) => {
            showCity = [];
            let element = '';
            let value = e.target.value.split('-');
            let selectValue = parseInt(value[0]);
            console.log(selectValue);
            cityArrayData.forEach(item => {
                if (selectValue == item.province_id) {
                    element += `
                    <option value="${item.city_id}-${item.city_name}">
                        ${item.city_name} (${item.type})
                    </option>
                    `
                };
            });
            $('#city-select').html(element)
        })

        console.log("Data", provinceArrayData);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mengambil URL saat ini
            var currentUrl = window.location.href;
            // Mengekstrak nilai parameter referral_code dari URL
            var urlParams = new URLSearchParams(currentUrl.split('?')[1]);
            var referralCode = urlParams.get('referral_code');
            console.log(referralCode);

            // Menetapkan nilai referralCode ke dalam input
            var referralCodeInput = document.getElementById('referralCode');
            referralCodeInput.value = referralCode;
        });
    </script>

    {{-- <section class="mb-[75px] flex items-center justify-between px-[120px]">

        <div class="grid grid-cols-2">
            <div class="border">asd</div>
            <div class="border">asd</div>
        </div>

        <div class="w-[633px]">
            <h1 class="mb-[60px] w-[427px] text-[32px] font-semibold">Selamat datang kembali, silahkan masuk</h1>
            <div class="mb-[50px]">
                <form action="">
                    <div class="mb-[30px] flex lg:w-[400px] w-full flex-col">
                        <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                        <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Email">
                    </div>
                    <div class="mb-[50px] flex lg:w-[400px] w-full flex-col">
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
