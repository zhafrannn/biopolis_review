@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Pengajuan Pencairan</h3>
    </div>

    <div class="mb-[28px] flex items-center justify-between">
        <div class="flex items-center">
            <!-- <p class="mr-[27px] text-[13px] font-semibold">Status</p>
            <div class="flex items-center gap-[13px]">
                <button class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[13.54px] text-primary">Semua</button>
                <button class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Diproses</button>
                <button class="rounded-xl border border-[#969EBA] px-[20.32px] py-[6.77px] text-[13.54px] text-[#969EBA]">Selesai</button>
            </div> -->
        </div>
    </div>

    {{-- start: Card --}}
    @foreach($withdraws as $withdraw)
    <form action="{{url('admin/pengajuan-pencairan/'. $withdraw->id)}}" method="POST">
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[13.54px]">
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">{{ $withdraw->status }}</p>
                </div>
                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px]">{{ $withdraw->created_at }}</p>
                </div>

                <div>
                    <p class="text-[13.54px] font-semibold">{{ $withdraw->user->user_biodata->nama_rekening }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[13.54px]">

                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $withdraw->user->name }}</h3>
                        <p class="text-[13.54px]">Jumlah yang dicairkan</p>
                        <p class="text-[13.54px]">Rp {{ number_format($withdraw->withdraw_total_balance) }}</p>
                    </div>
                </div>
                <div class="border-l-2 pl-[13.54px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[13.54px]">{{ $withdraw->user->user_biodata->nama_rekening }}</p>
                        <p class="text-[13.54px]">{{ $withdraw->user->user_biodata->nama_bank }}</p>
                        <p class="text-[13.54px]">{{ $withdraw->user->user_biodata->no_rekening }}</p>
                    </div>

                </div>

            </div>

            <div class="flex justify-end">
                <button class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white" type="submit">Konfirmasi
                    Pencairan</button>
            </div>
        </div>
    </form>
    @endforeach
    {{-- end: Card --}}



</section>
@endsection