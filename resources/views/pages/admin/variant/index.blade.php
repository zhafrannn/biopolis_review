@extends('layouts.auth')

@section('content')
<section class="">
    <div class="mb-5">
        <h3 class="text-[20.32px] font-semibold">Daftar Produk </h3>
    </div>
    <div class="flex justify-end mb-5">
        <button onclick="create_variant.showModal()" class="text-white btn btn-primary">Create Product</button>
        @include('components.admin.modal-variant.create')
    </div>

    <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <table class="w-full">
            <thead class="text-md font-semibold">
                <tr class="border-b border-[#969EBA]">
                    <th class="p-[10px] text-left">Nama Produk</th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Deskripsi</p>
                        </div>
                    </th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Stock</p>
                        </div>
                    </th>
                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Terjual</p>
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
                @foreach($variants as $variant)
                <tr class="border-b border-[#969EBA]">
                    <td class="p-[10px]">{{ $variant->variant_name }}</td>
                    <td class="p-[10px]">{{ $variant->description }}</td>
                    <td class="p-[10px]">{{ $variant->stock}}</td>
                    <td class="p-[10px]"></td>
                    <td class="flex items-center gap-2">
                        <button onclick="show_variant{{ $variant->id }}.showModal()" class="text-white btn btn-info">Show</button>
                        @include('components.admin.modal-variant.show')
                        <button onclick="edit_variant{{ $variant->id }}.showModal()" class="text-white btn btn-warning">Edit</button>
                        @include('components.admin.modal-variant.edit')
                        <a href="{{ url('/admin/variant/delete/'. $variant->id) }}" class="text-white btn btn-error">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection