@extends('layouts.auth')

@section('content')
<h1 class="mb-8 text-[20.317px] font-semibold text-[#0A0A0B]">Content Management System</h1>
<div class="flex gap-11">
    <div class="flex flex-col justify-between h-1">
        <button class="" onclick="handleTentangKami()">
            Tentang Kami
        </button>
        <div class="border border-green-500 mt-2 " id="line-tentang-kami"></div>
    </div>
    <div class="flex flex-col justify-between h-1">
        <button class="" onclick="handleManfaat()">
            Manfaat
        </button>
        <div class="border border-green-500 mt-2 hidden" id="line-manfaat"></div>
    </div>
    <div class="flex flex-col justify-between h-1">
        <button class="" onclick="handleKemitraan()">
            Kemitraan
        </button>
        <div class="border border-green-500 mt-2 hidden" id="line-kemitraan"></div>
    </div>
    <div class="flex flex-col justify-between h-1">
        <button class="" onclick="handleTestimoni()">
            Testimoni & FaQ
        </button>
        <div class="border border-green-500 mt-2 hidden" id="line-testimoni"></div>
    </div>
</div>
<div class="border w-full mt-7"></div>
<!-- Tentang Kami -->
<div class="" id="tentang-kami">
    <!-- Start tentang_kami_1 -->
    <div class="w-[100%] rounded-2xl border mt-5">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Tentang Kami 1</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_tentang_kami_1.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/tentang-kami/modal-tentang-kami-1')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{ $teks_judul_tentang_kami_1->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_tentang_kami_1->value }}
                </textarea>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                <div class="flex w-[50%] flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                    <img src="{{ asset('images/' . $gambar_tentang_kami_1->value) }}" alt="" class="w-[300px] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_tentang_kami_1->value }}</p>
                </div>
            </div>
        </div>
    </div>
    <!--End tentang_kami_1 -->

    <!-- Start banner_rating -->
    <div class="mt-6 w-[100%] rounded-2xl border ">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Banner Rating</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_banner_rating.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/tentang-kami/modal-banner-rating')
            </div>
            <div class="flex justify-between gap-5">
                <div class="mt-9 flex w-[50%] flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Angka</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{ $angka_banner_rating_1->value }}">
                </div>
                <div class="mt-9 flex w-[50%] flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Teks</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_banner_rating_1->value }}">
                </div>
            </div>
            <div class="flex justify-between gap-5">
                <div class="mt-9 flex w-[50%] flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Angka</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{ $angka_banner_rating_2->value }}">
                </div>
                <div class="mt-9 flex w-[50%] flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Teks</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_banner_rating_2->value }}">
                </div>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_banner_rating_3->value }}">
            </div>

            <div class="flex justify-between gap-5">
                <div class="mt-9 flex flex-col w-1/3">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                    <div class="flex flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                        <img src="{{ asset('images/' . $gambar_banner_rating_1->value) }}" alt="" class="w-[150px] px-[24px] text-[#969EBA]">
                        <p>{{ $gambar_banner_rating_1->value }}</p>
                    </div>
                </div>
                <div class="mt-9 flex flex-col w-1/3">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                    <div class="flex flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                        <img src="{{ asset('images/' . $gambar_banner_rating_2->value) }}" alt="" class="w-[150px] px-[24px] text-[#969EBA]">
                        <p>{{ $gambar_banner_rating_2->value }}</p>
                    </div>
                </div>
                <div class="mt-9 flex flex-col w-1/3">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                    <div class="flex flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                        <img src="{{ asset('images/' . $gambar_banner_rating_3->value) }}" alt="" class="w-[150px] px-[24px] text-[#969EBA]">
                        <p>{{ $gambar_banner_rating_3->value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner_rating -->

    <!-- Start tentang_kami_2 -->
    <div class="mt-6 w-[100%] rounded-2xl border">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Tentang Kami 2</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_tentang_kami_2.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/tentang-kami/modal-tentang-kami-2')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar Judul</label>
                <div class="flex w-[50%] flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                    <img src="{{ asset('images/' . $gambar_tentang_kami_2->value) }}" alt="" class="w-[756px] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_tentang_kami_2->value }}</p>
                </div>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{ $teks_judul_tentang_kami_2->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_tentang_kami_2->value }}
                </textarea>
            </div>
        </div>
    </div>
    <!-- End tentang_kami_2 -->

    <!-- Start tentang_kami_3 -->
    <div class="mt-6 w-[100%] rounded-2xl border mb-5">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Tentang Kami 3</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_tentang_kami_3.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/tentang-kami/modal-tentang-kami-3')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{ $teks_judul_tentang_kami_3->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_tentang_kami_3->value }}
                </textarea>
            </div>
        </div>
    </div>
    <!-- End tentang_kami_3 -->
</div>

<!-- Manfaat -->
<div class="hidden" id="manfaat">
    <!-- Start manfaat_1 -->
    <div class="w-[100%] rounded-2xl border mt-5">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Manfaat</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_manfaat_1.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/manfaat/modal-manfaat-1')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_manfaat_1->value }}">
            </div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_manfaat_1->value }}
                </textarea>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                <div class="flex flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] py-4">
                    <img src="{{ asset('images/' . $gambar_manfaat_1->value) }}" alt="" class="w-[510px] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_manfaat_1->value }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End manfaat_1 -->

    <!-- Start manfaat_2 -->
    <div class="mt-6 w-[100%] rounded-2xl border mb-5">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Manfaat Dropdown</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="create_benefit.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Add
                </button>
                @include('components/admin/content-management-system/manfaat/benefit/create')
            </div>
            @foreach($benefits as $benefit)
            <div class="p-5 rounded-lg border w-full mt-5">
                <div class="flex justify-end gap-5">
                    <a class="btn btn-error text-white" href="{{ url('/admin/content-management-system/benefit/delete/'. $benefit->id ) }}">Delete</a>
                    <button class="btn btn-primary text-white" onclick="edit_benefit{{ $benefit->id }}.showModal()">Edit</button>
                </div>
                @include('components/admin/content-management-system/manfaat/benefit/edit')
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $benefit->title }}">
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $benefit->description }}
                    </textarea>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End manfaat_2 -->
</div>

<!-- Kemitraan -->
<div class="hidden" id="kemitraan">
    <!-- Start kemitraan_1 -->
    <div class="mt-5 w-[100%] rounded-2xl border">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Kemitraan 1</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_kemitraan_1.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/kemitraan/modal-kemitraan-1')
            </div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_1->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_1->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_2->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_2->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_3->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_3->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_4->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_4->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_5->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_5->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_6->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_6->value }}
                </textarea>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                <div class="flex flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] py-4">
                    <img src="{{ asset('images/' . $gambar_kemitraan_1->value) }}" alt="" class="w-[510px] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_kemitraan_1->value }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End kemitraan_1 -->

    <!-- Start kemitraan_2 -->
    <div class="mt-6 w-[100%] rounded-2xl border">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">kemitraan Harga</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_kemitraan_2.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/kemitraan/modal-kemitraan-2')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_10->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_10->value }}
                </textarea>
            </div>

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_11->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Keterangan</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_sub_judul_kemitraan_11_1->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Keterangan</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_sub_judul_kemitraan_11_2->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Keterangan</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_sub_judul_kemitraan_11_3->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Link Button Pelajari Selanjutnya</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $link_button_pdf->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                <div class="flex w-[50%] flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                    <img src="{{ asset('images/' . $gambar_kemitraan_2->value) }}" alt="" class="w-[300px] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_kemitraan_2->value }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End kemitraan_2 -->

    <!-- Start kemitraan_3 -->
    <div class="mt-6 w-[100%] rounded-2xl border">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Memulai Kemitraan</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_kemitraan_3.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/kemitraan/modal-kemitraan-3')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_7->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_7->value }}
                </textarea>
            </div> 

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_8->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_8->value }}
                </textarea>
            </div> 

            <div class="my-[32px] border border-[#E5E5E5]"></div>

            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $teks_judul_kemitraan_9->value }}">
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $teks_sub_judul_kemitraan_9->value }}
                </textarea>
            </div> 
        </div>
    </div>
    <!-- End kemitraan_3 -->

    <!-- Start Gambar Sebelum footer  -->
    <div class="mt-6 w-[100%] rounded-2xl border mb-5">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Memulai Kemitraan</h3>
                <button class="btn btn-primary h-[36px] w-[66,14px] p-[10px] text-white" onclick="edit_gambar_sebelum_footer.showModal()">
                    <img src="{{ asset('images/icons/edit.svg') }}" alt="">Edit
                </button>
                @include('components/admin/content-management-system/kemitraan/modal-gambar-sebelum-footer')
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Gambar</label>
                <div class="flex w-[50%] flex-col items-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5]">
                    <img src="{{ asset('images/' . $gambar_testimoni_1->value) }}" alt="" class="w-[50%] px-[24px] text-[#969EBA]">
                    <p>{{ $gambar_testimoni_1->value }}</p>
                </div>
            </div>
            <div class="mt-9 flex flex-col">
                <label for="" class="text-[13.54px] text-[#969EBA]">Nomor Whatsapp Admin</label>
                <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $link_button_whatsapp->value }}">
            </div>
        </div>
    </div>
    <!-- Gambar Sebelum footer  -->
</div>

<!-- Testimony & FaQ -->
<div class="hidden" id="testimoni">
    <!-- Start Testimony -->
    <div class="mt-5 w-[100%] rounded-2xl border border-[#0A0A0B]">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Testimoni</h3>
                <button class="btn btn-primary text-white" onclick="create_testimoni.showModal()">Add</button>
                @include('components/admin/content-management-system/testimoni/create')
            </div>
            @foreach($testimonies as $testimony)
            <div class="p-5 rounded-lg border w-full mt-5">
                <div class="flex justify-end gap-5">
                    <a class="btn btn-error text-white" href="{{ url('/admin/content-management-system/testimony/delete/'. $testimony->id ) }}">Delete</a>
                    <button class="btn btn-primary text-white" onclick="edit_testimoni{{ $testimony->id }}.showModal()">Edit</button>
                </div>
                @include('components/admin/content-management-system/testimoni/edit')
                <div class="flex justify-between">
                    <div class="mt-9 flex w-[50%] flex-col">
                        <label for="" class="text-[13.54px] text-[#969EBA]">Nama</label>
                        <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] font-semibold text-[#969EBA]" value="{{$testimony->name}}">
                    </div>
                    <div class="mt-9 flex w-[50%] flex-col">
                        <label for="" class="text-[13.54px] text-[#969EBA]">Umur</label>
                        <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$testimony->age}} Tahun">
                    </div>
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Keterangan</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $testimony->description}}
                    </textarea>
                </div>
                <div class="mt-9 flex w-full flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Rating</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{$testimony->rate}}">
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- End Testimony -->

    <!-- Start FaQ -->
    <div class="mt-6 w-[100%] rounded-2xl border border-[#0A0A0B]">
        <div class="px-[20px] py-[32px]">
            <div class="flex justify-between">
                <h3 class="text-[13.54px] font-semibold text-[#0A0A0B]">Frequently Asked Question</h3>
                <button class="btn btn-primary text-white" onclick="create_faq.showModal()">Add</button>
                @include('components/admin/content-management-system/faq/create')
            </div>
            @foreach($faqs as $faq)
            <div class="p-5 rounded-lg border w-full mt-5">
                <div class="flex justify-end gap-5">
                    <a class="btn btn-error text-white" href="{{ url('/admin/content-management-system/faq/delete/'. $faq->id ) }}">Delete</a>
                    <button class="btn btn-primary text-white" onclick="edit_faq{{ $faq->id }}.showModal()">Edit</button>
                </div>
                @include('components/admin/content-management-system/faq/edit')
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Judul</label>
                    <input type="text" readonly class="h-[56px] rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[24px] text-[#969EBA]" value="{{ $faq->title }}">
                </div>
                <div class="mt-9 flex flex-col">
                    <label for="" class="text-[13.54px] text-[#969EBA]">Teks Sub Judul</label>
                    <textarea class="flex h-[98px] items-center justify-center rounded-xl border border-[#E5E5E5] bg-[#F5F5F5] px-[20px] pt-2 text-[#969EBA]" readonly>{{ $faq->description }}
                    </textarea>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End FaQ -->
</div>

<script>
    let tabTentangKami = document.getElementById("tentang-kami")
    let tabManfaat = document.getElementById("manfaat")
    let tabKemitraan = document.getElementById("kemitraan")
    let tabTestimoni = document.getElementById("testimoni")

    let lineTentangKami = document.getElementById("line-tentang-kami")
    let lineManfaat = document.getElementById("line-manfaat")
    let lineKemitraan = document.getElementById("line-kemitraan")
    let lineTestimoni = document.getElementById("line-testimoni")

    const handleTentangKami = () => {

        tabTentangKami.classList.remove('hidden')
        lineTentangKami.classList.remove('hidden')

        if (!tabManfaat.classList.contains('hidden')) {
            tabManfaat.classList.add('hidden')
        }

        if (!tabKemitraan.classList.contains('hidden')) {
            tabKemitraan.classList.add('hidden')
        }

        if (!tabTestimoni.classList.contains('hidden')) {
            tabTestimoni.classList.add('hidden')
        }

        if (!lineManfaat.classList.contains('hidden')) {
            lineManfaat.classList.add('hidden')
        }

        if (!lineKemitraan.classList.contains('hidden')) {
            lineKemitraan.classList.add('hidden')
        }

        if (!lineTestimoni.classList.contains('hidden')) {
            lineTestimoni.classList.add('hidden')
        }
    }

    const handleManfaat = () => {

        tabManfaat.classList.remove('hidden')
        lineManfaat.classList.remove('hidden')

        if (!tabTentangKami.classList.contains('hidden')) {
            tabTentangKami.classList.add('hidden')
        }

        if (!tabKemitraan.classList.contains('hidden')) {
            tabKemitraan.classList.add('hidden')
        }

        if (!tabTestimoni.classList.contains('hidden')) {
            tabTestimoni.classList.add('hidden')
        }

        if (!lineTentangKami.classList.contains('hidden')) {
            lineTentangKami.classList.add('hidden')
        }

        if (!lineKemitraan.classList.contains('hidden')) {
            lineKemitraan.classList.add('hidden')
        }

        if (!lineTestimoni.classList.contains('hidden')) {
            lineTestimoni.classList.add('hidden')
        }
    }

    const handleKemitraan = () => {

        tabKemitraan.classList.remove('hidden')
        lineKemitraan.classList.remove('hidden')

        if (!tabManfaat.classList.contains('hidden')) {
            tabManfaat.classList.add('hidden')
        }

        if (!tabTentangKami.classList.contains('hidden')) {
            tabTentangKami.classList.add('hidden')
        }

        if (!tabTestimoni.classList.contains('hidden')) {
            tabTestimoni.classList.add('hidden')
        }

        if (!lineManfaat.classList.contains('hidden')) {
            lineManfaat.classList.add('hidden')
        }

        if (!lineTentangKami.classList.contains('hidden')) {
            lineTentangKami.classList.add('hidden')
        }

        if (!lineTestimoni.classList.contains('hidden')) {
            lineTestimoni.classList.add('hidden')
        }
    }

    const handleTestimoni = () => {

        tabTestimoni.classList.remove('hidden')
        lineTestimoni.classList.remove('hidden')

        if (!tabManfaat.classList.contains('hidden')) {
            tabManfaat.classList.add('hidden')
        }

        if (!tabTentangKami.classList.contains('hidden')) {
            tabTentangKami.classList.add('hidden')
        }

        if (!tabKemitraan.classList.contains('hidden')) {
            tabKemitraan.classList.add('hidden')
        }

        if (!lineManfaat.classList.contains('hidden')) {
            lineManfaat.classList.add('hidden')
        }

        if (!lineTentangKami.classList.contains('hidden')) {
            lineTentangKami.classList.add('hidden')
        }

        if (!lineKemitraan.classList.contains('hidden')) {
            lineKemitraan.classList.add('hidden')
        }
    }
</script>
@endsection