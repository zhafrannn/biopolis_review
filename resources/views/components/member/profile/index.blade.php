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
            <?php
            $provinsi = explode('-', Auth::user()->user_biodata->provinsi);
            $kota = explode('-', Auth::user()->user_biodata->kota);
            ?>
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

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/api/get-address',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var provinsi = @json($provinsi[0]);
                var kota = @json($kota[0]);
                let provinceElement = '';
                (data.provincies).forEach(province => {
                    if(province['id'] == provinsi){
                        provinceElement += `
                            <option value"${province['id']}-${province['province_name']}" selected>
                                <p>${province['province_name']}</p>
                            </option>
                        `
                    }
                    provinceElement += `
                        <option value"${province['id']}-${province['province_name']}">
                            <p>${province['province_name']}</p>
                        </option>
                    `
                })
                $('#provincy-select').html(provinceElement);
                
                let cityElement = '';
                (data.cities).forEach(city => {
                    if(city['id'] == kota){
                        cityElement += `
                            <option value"${city['city_id']}-${city['city_name']}" selected>
                                <p>${city['city_name']}(${city['type']})</p>
                            </option>
                        `
                    }
                    cityElement += `
                        <option value"${city['city_id']}-${city['city_name']}">
                            <p>${city['city_name']}(${city['type']})</p>
                        </option>
                    `
                })
                $('#city-select').html(cityElement);
                
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    })
</script>