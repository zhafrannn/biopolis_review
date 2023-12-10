@extends('layouts.auth')

@section('content')
<section class="mb-[27.92px] text-[#0A0A0B]">

    <div class="mb-[28px]">
        <h3 class="text-[20.32px] font-semibold">Pengajuan Penukaran Poin</h3>
    </div>

    <div class="mb-[28px] flex items-center justify-between">
        <!-- <div class="flex items-center">
                <p class="mr-[27px] text-[13px] font-semibold">Status</p>
                <div class="flex items-center gap-[13px] text-[#969EBA]">
                    <button id="button-tab-all" onclick="HandleTab('tab-all')"
                        class="rounded-xl border border-primary bg-primary bg-opacity-20 px-[20.32px] py-[6.77px] text-[15px] text-primary">Semua</button>
                    <button id="button-tab-pending" onclick="HandleTab('tab-pending')"
                        class="rounded-xl border px-[20.32px] py-[6.77px] text-[15px]">Diproses</button>
                    <button id="button-tab-paid" onclick="HandleTab('tab-paid')"
                        class="rounded-xl border px-[20.32px] py-[6.77px] text-[15px]">Selesai</button>
                </div>
            </div> -->
        <!-- <div>
            <select name="" id="" class="h-[33.86px] w-[331.85px] rounded-[10.16px] border bg-white text-[12.7px] text-[#969EBA]">
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
                <option value="">30 Hari Terakhir (26 Sep 2023 - 26 Oct 2023)</option>
            </select>
        </div> -->
    </div>

    <div id="tab-all">
        @foreach ($user_point_exchange as $item)
        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[15px]">

                @if ($item->status == 'completed')
                <div class="rounded-[5px] bg-primary bg-opacity-20 px-[6.67px] py-[3.39px] text-primary">
                    <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                </div>
                @endif

                @if ($item->status == 'pending')
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                </div>
                @endif



                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px]">{{ $item->created_at }}</p>
                </div>
                <div>
                    <p class="text-[15px] font-semibold">Kode Pencairan : {{ $item->withdraw_code }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[15px]">

                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $item->user->name }}</h3>
                        <p class="text-[15px]">Jumlah point yang dicairkan</p>
                        <p class="text-[20px] text-primary">{{ $item->point_exchange->point }} Point</p>
                        <p class="text-[20px] font-semibold">{{ $item->point_exchange->description }}</p>
                    </div>
                </div>
                <div class="border-l-2 pl-[15px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[15px]">{{ $item->user->name }}</p>
                        <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $item->user->user_biodata->nama_bank }}</span>
                        </p>
                        <p class="text-[15px]">No Rekening : {{ $item->user->user_biodata->no_rekening }}</p>
                        <p class="text-[15px]">No Whatsapp : {{ $item->user->user_biodata->no_whatsapp }}</p>
                    </div>
                </div>

            </div>

            @if ($item->status == 'completed')
            <div class="flex items-center justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-semibold text-primary">Pengajuan Selesai</p>
            </div>
            @endif

            @if ($item->status == 'pending')
            {{-- Modal --}}
            <div class="flex justify-end gap-5">

                {{-- Modal Confirmation --}}
                <button class="btn btn-primary" onclick="modal_confirmation_all_{{ $item->id }}.showModal()">Konfirmasi
                    Pencairan</button>
                <dialog id="modal_confirmation_all_{{ $item->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>
                        <div>
                            <form action="{{ url('/admin/pengajuan-penukaran-poin') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <h4>Penerima : {{ $item->user->name }}</h4>
                                    <p class="text-[20px] text-primary">{{ $item->point_exchange->point }}
                                        Point
                                    </p>
                                    <p class="text-[20px] font-semibold">
                                        {{ $item->point_exchange->description }}
                                    </p>
                                    <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $item->user->user_biodata->nama_bank }}</span>
                                    </p>
                                    <p class="text-[15px]">No Rekening :
                                        {{ $item->user->user_biodata->no_rekening }}
                                    </p>
                                    <p class="text-[15px]">No Whatsapp :
                                        {{ $item->user->user_biodata->no_whatsapp }}
                                    </p>
                                    <input type="number" class="hidden" name="user_withdraw_point_id" value="{{ $item->id }}">
                                    <div class="flex justify-end">
                                        <button class="btn btn-primary" type="submit">Konfirmasi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </dialog>
                {{-- End Modal Confirmation --}}
                {{-- Modal Confirmation --}}
                <button class="btn btn-error" onclick="modal_cancel_all_{{ $item->id }}.showModal()">
                    Batalkan
                </button>
                <dialog id="modal_cancel_all_{{ $item->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>
                        <div>
                            <form action="{{ url('/admin/pengajuan-penukaran-poin/cancel') }}" method="post">
                                @csrf
                                <div>
                                    <h4>Penerima : {{ $item->user->name }}</h4>
                                    <p class="text-[20px] text-primary">{{ $item->point_exchange->point }}
                                        Point
                                    </p>
                                    <p class="text-[20px] font-semibold">
                                        {{ $item->point_exchange->description }}
                                    </p>
                                    <p class="text-[15px]">Bank <span class="font-semibold uppercase">{{ $item->user->user_biodata->nama_bank }}</span>
                                    </p>
                                    <p class="text-[15px]">No Rekening :
                                        {{ $item->user->user_biodata->no_rekening }}
                                    </p>
                                    <p class="text-[15px]">No Whatsapp :
                                        {{ $item->user->user_biodata->no_whatsapp }}
                                    </p>
                                    <input type="number" class="hidden" name="user_withdraw_point_id" value="{{ $item->id }}">
                                    <div class="flex justify-end">
                                        <button class="btn btn-primary" type="submit">Batalkan
                                            Pencairan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </dialog>
                {{-- End Modal Confirmation --}}
            </div>
            {{-- End Modal --}}
            @endif
        </div>
        {{-- end: Card --}}
        @endforeach
    </div>

    <div id="tab-pending" class="hidden">
        @foreach ($user_point_exchange as $item)
        @if ($item->status == 'pending')
        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[15px]">
                <div class="rounded-[5px] bg-[#FFF7F2] px-[6.67px] py-[3.39px] text-[#FF8345]">
                    <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                </div>
                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px]">{{ $item->created_at }}</p>
                </div>
                <div>
                    <p class="text-[15px] font-semibold">Kode Pencairan : {{ $item->withdraw_code }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[15px]">

                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $item->user->name }}</h3>
                        <p class="text-[15px]">Jumlah point yang dicairkan</p>
                        <p class="text-[15px]">{{ $item->point_exchange->point }}</p>
                    </div>
                </div>
                <div class="border-l-2 pl-[15px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[15px]">{{ $item->user->name }}</p>
                        <p class="text-[15px]">Bank BCA</p>
                        <p class="text-[15px]">314225112</p>
                    </div>

                </div>

            </div>

            {{-- Modal --}}
            <div class="flex justify-end">
                <button class="btn btn-primary" onclick="modal_confirmation_pending_{{ $item->id }}.showModal()">Konfirmasi
                    Pencairan</button>
                <dialog id="modal_confirmation_pending_{{ $item->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>
                        <h3 class="text-lg font-bold">Hello!</h3>
                        <p class="py-4">Press ESC key or click on ✕ button to close</p>
                    </div>
                </dialog>

            </div>
            {{-- End Modal --}}
        </div>
        {{-- end: Card --}}
        @endif
        @endforeach
    </div>
    <div id="tab-paid" class="hidden">
        @foreach ($user_point_exchange as $item)
        @if ($item->status == 'completed')
        {{-- start: Card --}}
        <div class="mb-[20px] rounded-xl bg-white p-[20.32px] shadow-[0_3.3px_12px_rgba(0,0,0,0.15)]">
            <div class="mb-[20.86px] flex items-center gap-[15px]">
                <div class="rounded-[5px] bg-primary bg-opacity-20 px-[6.67px] py-[3.39px] text-primary">
                    <p class="text-[10px] font-semibold">{{ $item->status }}</p>
                </div>
                <div class="flex items-center gap-[3.39px]">
                    <p class="text-[13px]">{{ $item->created_at }}</p>
                </div>
                <div>
                    <p class="text-[15px] font-semibold">Kode Pencairan : {{ $item->withdraw_code }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex gap-[15px]">

                    <div>
                        <h3 class="text-[16px] font-semibold">{{ $item->user->name }}</h3>
                        <p class="text-[15px]">Jumlah point yang dicairkan</p>
                        <p class="text-[15px]">{{ $item->point_exchange->point }}</p>
                    </div>
                </div>
                <div class="border-l-2 pl-[15px]">
                    <div>
                        <h3 class="text-[16px] font-semibold">Penerima</h3>
                        <p class="text-[15px]">{{ $item->user->name }}</p>
                        <p class="text-[15px]">Bank BCA</p>
                        <p class="text-[15px]">314225112</p>
                    </div>

                </div>

            </div>

            {{-- Modal --}}
            <div class="flex justify-end">
                <button class="btn btn-primary" onclick="modal_confirmation_paid_{{ $item->id }}.showModal()">Konfirmasi
                    Pencairan</button>
                <dialog id="modal_confirmation_paid_{{ $item->id }}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
                        </form>
                        <h3 class="text-lg font-bold">Hello!</h3>
                        <p class="py-4">Press ESC key or click on ✕ button to close</p>
                    </div>
                </dialog>

            </div>
            {{-- End Modal --}}
        </div>
        {{-- end: Card --}}
        @endif
        @endforeach
    </div>
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