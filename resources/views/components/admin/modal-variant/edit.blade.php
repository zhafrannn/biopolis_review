<dialog id="edit_variant{{ $variant->id }}" class="modal">
    <div class="modal-box w-11/12 max-w-5xl">
        <div class="px-[20px]">
            <div class="mb-10">
                <h3 class="text-[20.32px] font-semibold">Ubah Produk </h3>
            </div>
            <form action="{{ url('admin/variant/update/'.$variant->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
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
                                <input type="text" class="w-full rounded-xl border p-[13px]" value="{{ $variant->variant_name}}" name="variant_name">
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3/12">
                                <h2 class="text-[17px] font-semibold">Deskripsi Produk</h2>
                            </div>
                            <div class="flex-1">
                                <textarea type="text" class="w-full rounded-xl border p-[13px]" name="description">{{ $variant->description}}</textarea>
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
                                    <div class="bg-centerw-[105px] flex h-[105px] items-center justify-center rounded-xl border-4 border-dotted bg-contain">
                                        <img id="imagePreview" src="{{ asset('images/'. $variant->variant_image ) }}" alt="">
                                        <!-- <button type="button" id="button-image">
                                        </button> -->
                                        <!-- <div id="imagePreview"></div> -->
                                    </div>
                                </div>
                                <input type="file" id="imageInput" class="mt-2" name="variant_image" value="{{ $variant->variant_image }}">
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
                                <input type="text" class="w-full rounded-xl border p-[13px]" value="{{ $variant->stock }}" name="stock">
                            </div>
                        </div>
                        {{-- Input --}}

                    </div>
                </div>
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

<script>
        document.getElementById('imageInput').addEventListener('change', function() {
            // Get the selected file
            const file = this.files[0];

            if (file) {
                // Create a FileReader
                const reader = new FileReader();

                // Set the FileReader to load when the file is read
                reader.onload = function(e) {
                    // Get the result (base64 encoded image) and display it
                    document.getElementById('imagePreview').setAttribute =  ('src', ${e.target.result});
                };

                // Read the file as Data URL (base64 encoding)
                reader.readAsDataURL(file);
            }
        });
    </script>