<dialog id="create_user" class="modal overflow-hidden">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px] overflow-hidden">
            <div class="relative flex left-[740px] top-[1050px] z-0">
                <form method="dialog" class="">
                    <button class="btn">Cancel</button>
                </form>
            </div>
            <form action="{{ url('/admin/user-management/create') }}" method="POST">
                @csrf
                <div class=" flex justify-between">
                    <h3 class="text-[13.54px] text-[#0A0A0B] font-semibold">Create Data User</h3>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama</label>
                        <input required type="text" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="name">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Email</label>
                        <input type="text" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="email">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">NIK</label>
                        <input type="number" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nik">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor WhatsApp</label>
                        <input type="number" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="no_whatsapp">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-full flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Bank</label>
                        <select required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nama_bank">
                            <option value="bca">Bank Central Asia (BCA)</option>
                            <option value="mandiri">Mandiri</option>
                            <option value="bri">Bank Rakyat Indonesia (BRI)</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Rekening</label>
                        <input type="text" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nama_rekening">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Rekening</label>
                        <input type="number" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="no_rekening">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Provinsi</label>
                        <select required id="provincy-select-create" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="provinsi">
                            @foreach ($provincies as $item)
                            <option value="{{ $item['id'] }}-{{ $item['province_name'] }}">
                                {{ $item['province_name'] }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Kota</label>
                        <select required id="city-select-create" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="kota">
                            @foreach ($cities as $item)
                            <option value="{{ $item['city_id'] }}-{{ $item['city_name'] }}">
                                {{ $item['city_name'] }} ({{ $item['type'] }})
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Alamat Lengkap</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] px-[20px] pt-2 text-[#0A0A0B]" name="alamat_lengkap">
                    </textarea>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Kontak Darurat</label>
                        <input type="text" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nama_kontak_darurat">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Kontak Darurat</label>
                        <input type="number" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nomor_kontak_darurat">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Password</label>
                        <input type="password" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="password">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Kode Referral</label>
                        <input type="text" required class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="kode_referal">
                    </div>
                </div>
                <div class="flex justify-end mt-[42px]">
                    <button class="btn btn-primary text-white p-[10px] w-[66,14px] h-[36px] z-10" type="submit">
                        <img src="{{ asset('images/icons/edit.svg') }}" alt="">create
                    </button>
                </div>
            </form>
        </div>
    </div>
</dialog>

<script>
    let cityArrayData = @json($cities);
    let provinceArrayData = @json($provincies);
    let showCity = [];

    $('#provincy-select-create').on('change', (e) => {
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
        $('#city-select-create').html(element)
    })

    console.log("Data", provinceArrayData);
</script>