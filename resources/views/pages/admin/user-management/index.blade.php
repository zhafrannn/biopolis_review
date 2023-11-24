@extends('layouts.auth')

@section('content')
<section class="">
    <div class="mb-10 flex justify-between">
        <h3 class="text-[20.32px] font-semibold">User Management System</h3>
        <button onclick="create_user.showModal()" class="btn btn-primary text-white">Add New User</button>
        @include('components.admin.modal-user-management.create')
    </div>
    <div class="rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
        <table class="w-full overflow-x-auto">
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
                            <p>Role</p>
                        </div>
                    </th>

                    <th class="p-[10px]">
                        <div class="flex items-center gap-[2.66px]">
                            <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">
                            <p>Aksi</p>
                        </div>
                    </th>

                    <!-- <th class="p-[10px]">

                        <img src="{{ asset('images/icons/arrow-3.svg') }}" alt="">

                    </th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr class="border-b border-[#969EBA]">
                    <td class="p-[10px]">{{ $member->name }}</td>
                    <td class="p-[10px]">{{ $member->email }}</td>
                    <td class="p-[10px]">{{ $member->user_biodata->no_whatsapp }}</td>
                    <td class="p-[10px]">{{ $member->role }}</td>
                    <td class="p-[10px]">
                        <button onclick="show_user{{ $member->id }}.showModal()" href="" class="text-white btn btn-info">Show</button>
                        @include('components.admin.modal-user-management.show')
                        <button onclick="edit_user{{ $member->id }}.showModal()" href="" class="text-white btn btn-primary">Edit</button>
                        @include('components.admin.modal-user-management.edit')
                        <!-- <a href="" class="text-white btn btn-error">Delete</a> -->
                    </td>
                    <!-- <td class="p-[10px]"></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection