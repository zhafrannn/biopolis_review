@extends('layouts.auth')

@section('content')
    <section class="">
        <div class="mb-10">
            <h3 class="text-[20.32px] font-semibold">User Management System</h3>
        </div>

        <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <table class="w-full">
                <thead class="text-md font-semibold">
                    <tr class="border-b border-[#969EBA]">
                        <th class="p-[10px] text-left">Nama Mitra</th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Email</p>
                            </div>
                        </th>
                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>No Telepon </p>
                            </div>
                        </th>

                        <th class="p-[10px]">
                            <div class="flex items-center gap-[2.66px]">
                                <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                                <p>Aksi</p>
                            </div>
                        </th>

                        <th class="p-[10px]">

                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-[#969EBA]">
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                    </tr>
                    <tr class="border-b border-[#969EBA]">
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                        <td class="p-[10px]">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
