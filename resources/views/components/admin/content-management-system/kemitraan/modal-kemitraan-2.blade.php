<dialog id="edit_kemitraan_2" class="modal overflow-hidden">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px] overflow-hidden">
            <div class="relative flex left-[740px] top-12 z-0">
                <form method="dialog" class="">
                    <button class="btn">Close</button>
                </form>
            </div>
            <form action="{{ route('cms_update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class=" flex justify-between">
                    <h3 class="text-[13.54px] text-[#0A0A0B] font-semibold">Judul Besar</h3>
                    <div class="flex">
                        <button class="btn btn-primary text-white p-[10px] w-[66,14px] h-[36px] z-10" type="submit">
                            <img src="{{ asset('images/icons/edit.svg') }}" alt="">Update
                        </button>
                    </div>
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_10->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_10->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_10->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_10->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_11->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_11->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Keterangan</label>
                    <input name="data[{{ $teks_sub_judul_kemitraan_11_1->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_sub_judul_kemitraan_11_1->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Keterangan</label>
                    <input name="data[{{ $teks_sub_judul_kemitraan_11_2->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_sub_judul_kemitraan_11_2->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Keterangan</label>
                    <input name="data[{{ $teks_sub_judul_kemitraan_11_3->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_sub_judul_kemitraan_11_3->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Link Button Pelajari Selanjutnya</label>
                    <input name="data[{{ $link_button_pdf->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px]" value="{{ $link_button_pdf->value }}">
                </div>
            </form>
        </div>
    </div>
</dialog>