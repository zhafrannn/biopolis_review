@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Pengajuan Penggantian Rekening</h3>
    </div>

    @foreach($banks as $bank)
    <form action="{{url('admin/pengajuan-penggantian-rekening/'. $bank->id)}}" method="POST">
        @csrf
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px] font-semibold">{{ $bank->user->name }}</p>
                    <p class="text-[13px]">{{ $bank->created_at }}</p>
                </div>
            </div>

            <div class="flex items-center gap-[13.54px]">
                <div class="flex w-[55px] items-center justify-center">
                    <img src="{{ asset('images/icons/card.svg') }}" alt="">
                </div>
                <div class="flex flex-1 flex-col gap-[20px]">
                    {{-- Input --}}
                    <div class="flex flex-col gap-[3.54px]">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold text-[#969EBA]">Nama Bank</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px]" readonly name="nama_bank" value="{{ $bank->nama_bank}}">
                        </div>
                    </div>
                    {{-- Input --}}
                    {{-- Input --}}
                    <div class="flex flex-col gap-[3.54px]">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold text-[#969EBA]">Pemilik Rekening</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px]" readonly name="nama_rekening" value="{{ $bank->nama_rekening }}">
                        </div>
                    </div>
                    {{-- Input --}}
                    {{-- Input --}}
                    <div class="flex flex-col gap-[3.54px]">
                        <div class="w-3/12">
                            <h2 class="text-[17px] font-semibold text-[#969EBA]">Bank</h2>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="w-full rounded-xl border p-[13px]" readonly name="no_rekening" value="{{ $bank->no_rekening }}">
                        </div>
                    </div>
                    {{-- Input --}}
                </div>
            </div>

            <div class="flex justify-end mt-5">
                <button class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white">Konfirmasi
                    Rekening</button>
            </div>
        </div>
        </form>
        @endforeach

</section>
@endsection