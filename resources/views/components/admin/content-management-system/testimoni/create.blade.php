<dialog id="create_testimoni" class="modal overflow-hidden">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px] overflow-hidden">
            <div class="relative flex left-[700px] top-12 z-0">
                <form method="dialog" class="">
                    <button class="btn">Cancel</button>
                </form>
            </div>
            <form action="{{ url('/admin/content-management-system/testimony/create') }}" method="POST">
                @csrf
                @method('PUT')
                <div class=" flex justify-between">
                    <h3 class="text-[13.54px] text-[#0A0A0B] font-semibold">Create Testimony</h3>
                    <div class="flex">
                        <button class="btn btn-primary text-white p-[10px] w-[66,14px] h-[36px] z-10" type="submit">
                            <img src="{{ asset('images/icons/edit.svg') }}" alt="">Create
                        </button>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Nama</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] font-semibold text-[#0A0A0B]" name="name">
                    </div>
                    <div class="mt-9 flex w-[450px] flex-col">
                        <label for="" class="text-[13.54px] text-[#0A0A0B]">Umur</label>
                        <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="age">
                    </div>
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Keterangan</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] px-[20px] pt-2 text-[#0A0A0B]" name="description">
                    </textarea>
                </div>
                <div class="mt-9 flex w-full flex-col">
                    <label for="" class="text-[13.54px] text-[#0A0A0B]">Rate</label>
                    <input type="text" class="h-[56px] rounded-xl border border-[#E5E5E5] px-[24px] text-[#0A0A0B]" name="rate">
                </div>
            </form>
        </div>
    </div>
</dialog>