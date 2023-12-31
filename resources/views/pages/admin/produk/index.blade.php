@extends('layouts.auth')

@section('content')
<section class="">
    <div class="mb-5">
        <h3 class="text-[20.32px] font-semibold">Daftar Produk </h3>
    </div>

    <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <table class="w-full">
            <thead class="text-md font-semibold">
                <tr class="border-b border-[#969EBA]">
                    <th class="p-[10px] text-left">Nama Paket</th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Bonus Point</p>
                        </div>
                    </th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Berat</p>
                        </div>
                    </th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Harga</p>
                        </div>
                    </th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Aksi</p>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b border-[#969EBA]">
                    <td class="p-[10px]">{{ $product->product_name}}</td>
                    <td class="p-[10px]">{{ $product->point}}</td>
                    <td class="p-[10px]">{{ $product->weight}} gram</td>
                    <td class="p-[10px]">Rp. {{ number_format($product->price)}}</td>
                    <td class="flex items-center gap-2">
                        <button onclick="show_produk{{ $product->id }}.showModal()" class="text-white btn btn-info">Show</button>
                        @include('components.admin.modal-produk.show')
                        <button onclick="edit_produk{{ $product->id }}.showModal()" class="text-white btn btn-warning">Edit</button>
                        @include('components.admin.modal-produk.edit')
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection