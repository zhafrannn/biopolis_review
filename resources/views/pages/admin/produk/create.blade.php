@extends('layouts.auth')

@section('content')
<section class="my-10">
    <div class="mb-10">
        <h3 class="text-[20.32px] font-semibold">Tambah Produk </h3>
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
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
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
                <h2 class="text-[17px] font-semibold">Harga</h2>
            </div>
            {{-- Input --}}
            <div class="flex items-center">
                <div class="w-3/12">
                    <h2 class="text-[17px] font-semibold">Minimum Pemesanan</h2>
                </div>
                <div class="flex-1">
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                </div>
            </div>
            {{-- Input --}}
            {{-- Input --}}
            <div class="flex items-center">
                <div class="w-3/12">
                    <h2 class="text-[17px] font-semibold">Harga Satuan</h2>
                </div>
                <div class="flex-1">
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                </div>
            </div>
            {{-- Input --}}
            {{-- Input --}}
            <div class="flex items-center">
                <div class="w-3/12">
                    <h2 class="text-[17px] font-semibold">Potongan Harga</h2>
                </div>
                <div class="flex-1">
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                </div>
            </div>
            {{-- Input --}}
            {{-- Input --}}
            <div class="flex items-center">
                <div class="w-3/12">
                    <h2 class="text-[17px] font-semibold">Poin Produk</h2>
                </div>
                <div class="flex-1">
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                </div>
            </div>
            {{-- Input --}}
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
                    <input type="text" class="w-full rounded-xl border p-[13px]" placeholder="type here">
                </div>
            </div>
            {{-- Input --}}

        </div>
    </div>
    {{-- end: Card --}}

    {{-- start: button --}}
    <div class="flex justify-end gap-5">
        <button class="h-[57px] w-[231px] rounded-xl border border-error p-[13.54px] text-[20px] font-semibold text-error">BATAL</button>
        <button class="h-[57px] w-[231px] rounded-xl border border-primary bg-primary p-[13.54px] text-[20px] font-semibold text-white">SIMPAN</button>
    </div>
    {{-- end: button --}}

</section>
<script>
    const buttonImage = document.getElementById('button-image')
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');

    buttonImage.addEventListener('click', () => {
        fileInput.click()
    })

    // Ambil referensi elemen input file dan div untuk preview


    // Tambahkan event listener saat input berubah
    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0]; // Ambil file pertama dari input

        if (file) {
            const fileReader = new FileReader();

            fileReader.readAsDataURL(file); // Membaca file sebagai URL data

            fileReader.onload = function() {
                const imageURL = fileReader.result; // URL data dari file

                // Set background image div preview dengan gambar yang dipilih
                preview.style.backgroundImage = `url('${imageURL}')`;
            };
        } else {
            preview.style.backgroundImage = 'none';
            preview.innerHTML = 'Tidak ada file yang dipilih';
        }
    });
</script>
@endsection