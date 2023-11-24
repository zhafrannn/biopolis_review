<dialog id="show_user{{ $member->id }}" class="modal overflow-hidden">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px] overflow-hidden">
            <div class="relative flex left-[850px] top-12 z-0">
                <form method="dialog" class="">
                    <button class="btn">Close</button>
                </form>
            </div>

            <div class=" flex justify-between mb-5">
                <h3 class="text-[13.54px] text-[#0A0A0B] font-semibold">Show Data User</h3>
            </div>
            <div class="flex justify-between">
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" name="name" value="{{$member->name}}">
                </div>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Email</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$member->email}}" name="email">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nik</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$member->user_biodata->nik}}" name="nik">
                </div>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Telepon</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$member->user_biodata->no_whatsapp}}" name="no_whatsapp">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="mt-9 flex w-full flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Bank</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" name="nama_bank" value="{{$member->user_biodata->nama_bank}}">

                </div>
            </div>
            <div class="flex justify-between">
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Rekening</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" name="nama_rekening" value="{{$member->user_biodata->nama_rekening}}">
                </div>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Rekening</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" name="no_rekening" value="{{$member->user_biodata->no_rekening}}">
                </div>
            </div>
            <div class="flex justify-between">
                <?php
                $provinsi = explode("-", $member->user_biodata->provinsi);
                $kota = explode("-", $member->user_biodata->kota);
                ?>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Provinsi</label>
                    <input readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $provinsi[1] }}" name="provinsi">
                </div>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Kota</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $kota[1] }}" name="kota">
                </div>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#0A0A0B]">Alamat Lengkap</label>
                <textarea readonly class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" name="alamat_lengkap">{{$member->user_biodata->alamat_lengkap}}
                </textarea>
            </div>
            <div class="flex justify-between">
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama Kontak Darurat</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$member->user_biodata->nama_kontak_darurat}}" name="nama_kontak_darurat">
                </div>
                <div class="mt-9 flex w-[450px] flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Nomor Kontak Darurat</label>
                    <input readonly type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$member->user_biodata->nomor_kontak_darurat}}" name="nomor_kontak_darurat">
                </div>
            </div>

        </div>
    </div>
</dialog>