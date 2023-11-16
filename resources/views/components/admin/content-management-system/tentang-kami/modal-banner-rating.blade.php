<dialog id="edit_banner_rating" class="modal overflow-hidden">
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
                <div class="flex justify-between">
                    <div class="flex flex-col mt-9 w-[400px]">
                        <label for="" class="text-[13.54px]">Angka</label>
                        <input name="data[{{ $angka_banner_rating_1->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $angka_banner_rating_1->value }}">
                    </div>
                    <div class="flex flex-col mt-9 w-[400px]    ">
                        <label for="" class="text-[13.54px]">Teks</label>
                        <input name="data[{{ $teks_banner_rating_1->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[56px] px-[24px]" value="{{ $teks_banner_rating_1->value }}">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col mt-9 w-[400px]">
                        <label for="" class="text-[13.54px]">Angka</label>
                        <input name="data[{{ $angka_banner_rating_2->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[56px] px-[24px] font-semibold" value="{{ $angka_banner_rating_2->value }}">
                    </div>
                    <div class="flex flex-col mt-9 w-[400px]    ">
                        <label for="" class="text-[13.54px]">Teks</label>
                        <input name="data[{{ $teks_banner_rating_2->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[56px] px-[24px]" value="{{ $teks_banner_rating_2->value }}">
                    </div>
                </div>
                <div class="flex flex-col mt-9">
                    <label for="" class="text-[13.54px]">Teks</label>
                    <input name="data[{{ $teks_banner_rating_3->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[56px] px-[24px]" value="{{ $teks_banner_rating_3->value }}">
                </div>

                <div class="flex justify-between">
                    <div class="flex flex-col mt-9">
                        <label for="" class="text-[13.54px]">Gambar</label>
                        <input name="data[{{ $gambar_banner_rating_1->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[57px] w-[279px] px-[24px]" value="{{ $gambar_banner_rating_1->value }}">
                    </div>
                    <div class="flex flex-col mt-9">
                        <label for="" class="text-[13.54px]">Gambar</label>
                        <input name="data[{{ $gambar_banner_rating_2->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[57px] w-[279px] px-[24px]" value="{{ $gambar_banner_rating_2->value }}">
                    </div>
                    <div class="flex flex-col mt-9">
                        <label for="" class="text-[13.54px]">Gambar</label>
                        <input name="data[{{ $gambar_banner_rating_3->key }}]" type="text" class="border border-[#E5E5E5] rounded-xl h-[57px] w-[279px] px-[24px]" value="{{ $gambar_banner_rating_3->value }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>