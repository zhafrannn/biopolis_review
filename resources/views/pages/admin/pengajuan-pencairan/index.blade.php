@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Pengajuan Pencairan Saldo</h3>
    </div>

    <!-- <div class="mb-[28px] flex items-center justify-between">
        <div class="flex items-center">
            <p class="mr-[27px] text-[13px] font-semibold">Status</p>
            <div class="flex items-center gap-[13px] text-[#969EBA]">
                <button id="button-tab-all" onclick="HandleTab('tab-all')" class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[15px] text-primary">Semua</button>
                <button id="button-tab-pending" onclick="HandleTab('tab-pending')" class="rounded-xl border px-[20.32px] py-[6.77px] text-[15px]">Diproses</button>
                <button id="button-tab-paid" onclick="HandleTab('tab-paid')" class="rounded-xl border px-[20.32px] py-[6.77px] text-[15px]">Selesai</button>
            </div>
        </div>
    </div> -->

    {{-- Tab All --}}
    <div id="tab-all">
        {{-- start: Card --}}
        @foreach ($withdraws as $withdraw)
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center justify-between">
                {{-- Kiri --}}
                <div class="flex items-center gap-[13.54px]">
                    <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                        <p class="text-[10px] font-semibold">{{ $withdraw->status }}</p>
                    </div>
                    <div class="flex items-center gap-[3.39px]">
                        <p class="text-[13px]">{{ $withdraw->created_at }}</p>
                    </div>

                    <div>
                        <p class="text-[13.54px] font-semibold">{{ $withdraw->user->user_biodata->nama_rekening }}
                        </p>
                    </div>
                </div>
                {{-- End Kiri --}}
                {{-- Kanan --}}
                <div>
                    <p class="text-[15px] font-semibold">Kode Pencairan : {{ $withdraw->withdraw_code }}</p>
                </div>
                {{-- End Kanan --}}
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[13.54px]">



                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $withdraw->user->name }}</h3>
                        <p class="text-[15px]">Jumlah uang yang dicairkan</p>
                        <p class="text-[20px] font-semibold">Rp
                            {{ number_format($withdraw->withdraw_total_balance) }}
                        </p>
                    </div>
                </div>
                <div class="border-l-2 pl-[13.54px]">


                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[15px]">{{ $withdraw->user->user_biodata->nama_rekening }}</p>
                        <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $withdraw->user->user_biodata->nama_bank }}</span>
                        </p>
                        <p class="text-[15px]">No Rekening : {{ $withdraw->user->user_biodata->no_rekening }}</p>
                        <p class="text-[15px]">No Whatsapp : {{ $withdraw->user->user_biodata->no_whatsapp }}</p>
                    </div>

                </div>

            </div>

            @if ($withdraw->status == 'completed')
            <div class="flex items-center justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-semibold text-primary">Pencairan Selesai</p>
            </div>
            @endif

            @if ($withdraw->status == 'pending')
            <div class="flex justify-end gap-5">
                {{-- Modal Confirmation --}}
                <!-- You can open the modal using ID.showModal() method -->
                <div class="flex justify-end">
                    <button class="btn btn-primary" onclick="my_modal_all_{{ $withdraw->id }}.showModal()">Konfirmasi Pencairan</button>
                </div>
                {{-- Modal --}}
                <dialog id="my_modal_all_{{ $withdraw->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>

                        <form action="{{ url('/admin/pengajuan-pencairan') }}" method="post">
                            @csrf
                            <div>
                                <h4>Penerima : {{ $withdraw->user->name }}</h4>
                                <p class="text-[20px] text-primary">
                                    Rp.{{ number_format($withdraw->withdraw_total_balance) }},-
                                </p>

                                <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $withdraw->user->user_biodata->nama_bank }}</span>
                                </p>
                                <p class="text-[15px]">No Rekening :
                                    {{ $withdraw->user->user_biodata->no_rekening }}
                                </p>
                                <p class="text-[15px]">No Whatsapp :
                                    {{ $withdraw->user->user_biodata->no_whatsapp }}
                                </p>
                                <input type="text" class="hidden" name="user_withdraw_balance_id" value="{{ $withdraw->id }}">
                                <div class="flex justify-end">
                                    <button class="btn btn-primary" type="submit">Konfirmasi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </dialog>
                {{-- End Modal --}}
                {{-- Modal Confirmation --}}


                {{-- Modal Cancel Confirmation --}}
                <!-- You can open the modal using ID.showModal() method -->
                <div class="flex justify-end">
                    <button class="btn btn-error" onclick="my_modal_all_cancel_{{ $withdraw->id }}.showModal()">Batalkan</button>
                </div>
                {{-- Modal --}}
                <dialog id="my_modal_all_cancel_{{ $withdraw->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>

                        <form action="{{ url('/admin/pengajuan-pencairan') }}" method="post">
                            @csrf
                            <div>
                                <h4>Penerima : {{ $withdraw->user->name }}</h4>
                                <p class="text-[20px] text-primary">
                                    Rp.{{ number_format($withdraw->withdraw_total_balance) }},-
                                </p>

                                <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $withdraw->user->user_biodata->nama_bank }}</span>
                                </p>
                                <p class="text-[15px]">No Rekening :
                                    {{ $withdraw->user->user_biodata->no_rekening }}
                                </p>
                                <p class="text-[15px]">No Whatsapp :
                                    {{ $withdraw->user->user_biodata->no_whatsapp }}
                                </p>
                                <input type="text" class="hidden" name="user_withdraw_balance_id" value="{{ $withdraw->id }}">
                                <div class="flex justify-end">
                                    <button class="btn btn-primary" type="submit">Konfirmasi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </dialog>
                {{-- End Modal --}}
                {{-- Modal Cancel Confirmation --}}

            </div>
            @endif


        </div>
        @endforeach
        {{-- end: Card --}}
    </div>
    {{-- Tab All --}}
    {{-- Tab Pending --}}
    <div id="tab-pending" class="hidden">
        {{-- start: Card --}}
        @foreach ($withdraws as $withdraw)
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

            <!-- You can open the modal using ID.showModal() method -->
            <div class="flex justify-end">
                <button class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white" onclick="my_modal_{{ $withdraw->id }}.showModal()">Konfirmasi Pencairan</button>
            </div>
            {{-- Modal --}}
            <dialog id="my_modal_{{ $withdraw->id }}" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Hello!</h3>
                    <p class="py-4">Press ESC key or click on ✕ button to close</p>
                </div>
            </dialog>
            {{-- End Modal --}}


        </div>
        @endforeach
        {{-- end: Card --}}
    </div>
    {{-- Tab Pending --}}
    {{-- Tab Pending --}}
    <div id="tab-paid" class="hidden">
        {{-- start: Card --}}
        @foreach ($withdraws as $withdraw)
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

            <!-- You can open the modal using ID.showModal() method -->
            <div class="flex justify-end">
                <button class="rounded-[10px] bg-primary px-[20.32px] py-[6.77px] text-[17px] font-semibold text-white" onclick="my_modal_{{ $withdraw->id }}.showModal()">Konfirmasi Pencairan</button>
            </div>
            {{-- Modal --}}
            <dialog id="my_modal_{{ $withdraw->id }}" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Hello!</h3>
                    <p class="py-4">Press ESC key or click on ✕ button to close</p>
                </div>
            </dialog>
            {{-- End Modal --}}


        </div>
        @endforeach
        {{-- end: Card --}}
    </div>
    {{-- Tab Pending --}}



</section>

<script>
    const HandleTab = (type) => {
        $('#tab-all').addClass('hidden')
        $('#tab-pending').addClass('hidden')
        $('#tab-paid').addClass('hidden')

        $('#button-tab-all').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

        $('#button-tab-pending').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

        $('#button-tab-paid').removeClass('border-primary bg-primary bg-opacity-20 text-primary')

        if (type == 'tab-all') {
            $('#tab-all').removeClass('hidden')
            $('#button-tab-all').addClass('border-primary bg-primary bg-opacity-20 text-primary')
        }
        if (type == 'tab-pending') {
            $('#tab-pending').removeClass('hidden')
            $('#button-tab-pending').addClass('border-primary bg-primary bg-opacity-20 text-primary')
        }
        if (type == 'tab-paid') {
            $('#tab-paid').removeClass('hidden')
            $('#button-tab-paid').addClass('border-primary bg-primary bg-opacity-20 text-primary')
        }
    }
</script>
@endsection