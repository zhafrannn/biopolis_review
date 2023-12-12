<dialog id="show_variant{{ $variant->id }}" class="modal">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px]">
            <div class="relative flex justify-end z-0">
                <form method="dialog" class="">
                    <button class="h-[57px] w-[231px] rounded-xl border border-error p-[13.54px] text-[20px] font-semibold text-error">Keluar</button>
                </form>
            </div>
            <div class="mb-10">
                <h3 class="text-[20.32px] font-semibold">Ubah Produk </h3>
            </div>
            {{-- start: Card --}}
            <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="flex flex-col gap-[13px]">
                    <div class="flex">
                        <h2 class="text-[17px] font-semibold">Informasi Produk</h2>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold">Nama Produk</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px] bg-[#F5F5F5] text-[#969EBA]" readonly value="{{ $variant->variant_name}}">
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold">Deskripsi Produk</h2>
                        </div>
                        <div class="flex-1">
                            <textarea type="text" class="w-full rounded-xl border p-[13px] bg-[#F5F5F5] text-[#969EBA]" readonly>{{ $variant->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Card --}}

            {{-- start: Card --}}
            <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="flex flex-col gap-[13px]">
                    <div class="flex">
                        <h2 class="text-[17px] font-semibold">Detail Produk</h2>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold">Foto Produk</h2>
                        </div>
                        <div class="flex-1">
                            <div class="h-[105px] w-[105px]">

                                <div id="preview" class="bg-centerw-[105px] flex h-[105px] items-center justify-center rounded-xl border-4 border-dotted bg-contain">
                                    <input type="file" id="fileInput" class="invisible absolute">
                                    <button type="button" id="button-image">
                                        <img src="{{ asset('images/icons/img-upload.svg') }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Card --}}

            {{-- start: Card --}}
            <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                <div class="flex flex-col gap-[13px]">
                    <div class="flex">
                        <h2 class="text-[17px] font-semibold">Pengelolaan Produk</h2>
                    </div>
                    {{-- Input --}}
                    <div class="flex items-center">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold">Stok Produk</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px] bg-[#F5F5F5] text-[#969EBA]" readonly value="{{ $variant->stock }}">
                        </div>
                    </div>
                    {{-- Input --}}

                </div>
            </div>
            {{-- end: Card --}}

        </div>
    </div>
</dialog>


<section class="my-10">


</section>