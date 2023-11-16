<dialog id="edit_kemitraan_1" class="modal overflow-hidden">
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
                    <input name="data[{{ $teks_judul_kemitraan_1->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_1->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_1->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_1->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_2->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_2->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_2->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_2->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_3->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_3->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_3->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_3->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_4->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_4->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_4->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_4->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_5->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_5->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_5->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_5->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_6->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_6->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_6->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_6->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_7->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_7->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_7->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_7->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_8->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_8->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_8->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_8->value}}</textarea>
                </div>

                <div class="border border-[#E5E5E5] my-[32px]"></div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Judul</label>
                    <input name="data[{{ $teks_judul_kemitraan_9->key }}]" type="text" class="border border-[#c8c7c7] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $teks_judul_kemitraan_9->value }}">
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks Sub Judul</label>
                    <textarea name="data[{{ $teks_sub_judul_kemitraan_9->key }}]" id="" class="border border-[#E5E5E5] rounded-xl h-[98px] px-[24px] pt-2">{{$teks_sub_judul_kemitraan_9->value}}</textarea>
                </div>

                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Gambar Judul</label>
                    <input name="data[{{$gambar_kemitraan_1->key}}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[57px] px-[24px] " value="{{ $gambar_kemitraan_1->value }}">
                </div>
            </form>
        </div>
    </div>
</dialog>