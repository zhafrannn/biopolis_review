<dialog id="edit_produk{{ $product->id }}" class="modal">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px]">
            <div class="mb-10">
                <h3 class="text-[20.32px] font-semibold">Ubah Produk </h3>
            </div>
            <form action="{{ url('admin/produk/update/'.$product->id) }}" method="post">
                @csrf
                @method('PUT')
                {{-- start: Card --}}
                <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="flex flex-col gap-[13px]">
                        <div class="flex">
                            <h2 class="text-[17px] font-semibold">Informasi Paket</h2>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Nama Paket</h2>
                            </div>
                            <div class="flex-1">
                                <input type="text" class="w-full rounded-xl border p-[13px]" name="product_name" value="{{ $product->product_name}}">
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Deskripsi Paket</h2>
                            </div>
                            <div class="flex-1">
                                <textarea type="text" class="w-full rounded-xl border p-[13px]" name="description">{{ $product->description}}</textarea>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Berat Paket (Gram)</h2>
                            </div>
                            <div class="flex-1">
                                <input type="number" class="w-full rounded-xl border p-[13px]" name="weight" value="{{ $product->weight}}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end: Card --}}

                {{-- start: Card --}}
                <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
                    <div class="flex flex-col gap-[13px]">
                        <div class="flex">
                            <h2 class="text-[17px] font-semibold">Detail Paket</h2>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Foto Paket</h2>
                            </div>
                            <div class="flex-1">
                                <div class="h-[105px] w-[105px]">

                                    <div id="preview" class="bg-centerw-[105px] flex h-[105px] items-center justify-center rounded-xl border-4 border-dotted bg-contain">
                                        <input type="file" id="fileInput" class="invisible absolute" name="image">
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
                            <h2 class="text-[17px] font-semibold">Pengelolaan Paket</h2>
                        </div>
                        {{-- Input --}}
                        <div class="flex items-center">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Bonus Poin</h2>
                            </div>
                            <div class="flex-1">
                                <input type="number" class="w-full rounded-xl border p-[13px]" name="point" value="{{ $product->point }}">
                            </div>
                        </div>
                        {{-- Input --}}
                        {{-- Input --}}
                        <div class="flex items-center">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Harga Paket</h2>
                            </div>
                            <div class="flex-1">
                                <input type="number" class="w-full rounded-xl border p-[13px]" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                        {{-- Input --}}

                    </div>
                </div>
                {{-- end: Card --}}
                {{-- end: Card --}}

                {{-- start: button --}}
                <div class="flex justify-end gap-5">
                    <button class="h-[57px] w-[231px] rounded-xl border border-primary bg-primary p-[13.54px] text-[20px] font-semibold text-white z-10" type="submit">SIMPAN</button>
                </div>
                {{-- end: button --}}

            </form>
        </div>
        <div class="relative flex left-[450px] -top-[56px] z-0">
            <form method="dialog" class="">
                <button class="h-[57px] w-[231px] rounded-xl border border-error p-[13.54px] text-[20px] font-semibold text-error z-0">BATAL</button>
            </form>
        </div>
    </div>
</dialog>


<section class="my-10">


</section>