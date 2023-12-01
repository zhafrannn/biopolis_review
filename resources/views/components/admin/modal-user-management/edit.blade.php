<dialog id="edit_user{{ $member->id }}" class="modal overflow-hidden">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px] overflow-hidden">
            <div class="relative flex left-[740px] top-[1050px] z-0">
                <form method="dialog" class="">
                    <button class="btn">Cancel</button>
                </form>
            </div>
            <form action="{{ url('/admin/user-management/update/'. $member->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class=" flex justify-between">
                    <h3 class="text-[13.54px] text-[#0A0A0B] font-semibold">Edit Data User</h3>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="name" value="{{$member->name}}">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Email</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->email}}" name="email">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nik</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->user_biodata->nik}}" name="nik">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Telepon</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->user_biodata->no_whatsapp}}" name="no_whatsapp">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-full flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Bank</label>
                        <select type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nama_bank">
                            <option value="bca">Bank Central Asia (BCA)</option>
                            <option value="mandiri">Mandiri</option>
                            <option value="bri">Bank Rakyat Indonesia (BRI)</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Rekening</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="nama_rekening" value="{{$member->user_biodata->nama_rekening}}">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Rekening</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="no_rekening" value="{{$member->user_biodata->no_rekening}}">
                    </div>
                </div>
                <?php
                $provinsi = explode("-", $member->user_biodata->provinsi);
                $kota = explode("-", $member->user_biodata->kota);
                ?>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Provinsi</label>
                        <select id="provincy-select-edit" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->user_biodata->provinsi}}" name="provinsi">
                            @foreach ($provincies as $item)
                            @if($provinsi[0] == $item['id'])
                            <option value="{{ $item['id'] }}-{{ $item['province_name'] }}" selected>
                                {{ $item['province_name'] }}
                            </option>
                            @else
                            <option value="{{ $item['id'] }}-{{ $item['province_name'] }}">
                                {{ $item['province_name'] }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Kota</label>
                        <select id="city-select-edit" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="kota">

                            @foreach ($cities as $item)
                            @if($kota[0] == $item['city_id'])
                            <option value="{{ $item['city_id'] }}-{{ $item['city_name'] }}" selected>
                                {{ $item['city_name'] }} ({{ $item['type'] }})
                            </option>
                            @else
                            <option value="{{ $item['city_id'] }}-{{ $item['city_name'] }}">
                                {{ $item['city_name'] }} ({{ $item['type'] }})
                            </option>
                            @endif

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Alamat Lengkap</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] px-[20px] pt-2 text-[#0A0A0B]" name="alamat_lengkap">{{$member->user_biodata->alamat_lengkap}}
                    </textarea>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Kontak Darurat</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->user_biodata->nama_kontak_darurat}}" name="nama_kontak_darurat">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Kontak Darurat</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" value="{{$member->user_biodata->nomor_kontak_darurat}}" name="nomor_kontak_darurat">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Password</label>
                        <input type="password" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="password">
                    </div>
                </div>
                <div class="flex justify-end mt-[42px]">
                    <button class="btn btn-primary text-white p-[10px] w-[66,14px] h-[36px] z-10" type="submit">
                        <img src="{{ asset('images/icons/edit.svg') }}" alt="">Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</dialog>

<script>
    $('#provincy-select-edit').on('change', (e) => {
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
        $('#city-select-edit').html(element)
    })

    console.log("Data", provinceArrayData);
</script>