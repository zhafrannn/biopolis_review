<!-- You can open the modal using ID.showModal() method -->

<button onclick="modal_point_mobile.showModal()" class="btn h-16 w-[100%] bg-primary text-[20px] font-semibold text-white">Tukar
    Poin</button>
<dialog id="modal_point_mobile" class="modal">
    <div class="relative w-full rounded-[15px] bg-white overflow-y-auto">
        <div class="flex items-center gap-2 border-b p-6 shadow-[0_2px_4px_0_rgba(0,0,0,0.15)]">
            <form method="dialog">
                <button class="w- h-[32px] w-[32px] rounded-full border-2 border-black">✕</button>
            </form>

            <div>
                <h3 class="text-[20px] font-semibold">Tukar Poin</h3>
            </div>
        </div>
        {{-- Content --}}
        {{-- Title --}}
        <div class="p-6">
            <div class="flex justify-between">
                <h4 class="text-[16px] font-semibold">Pilih Reward</h4>
                <div class="flex flex-col items-end text-[16px] font-semibold text-primary">
                    <h4>Poin Kamu</h4>
                    <h4>{{ Auth::user()->user_wallet->current_point }}</h4>
                </div>
            </div>
        </div>
        {{-- End Title --}}
        {{-- Choose Point --}}
        <div>
            @foreach ($point_exchange as $item)
                {{-- Point Item --}}
                <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] p-6 transition duration-300 hover:border-green-500"
                    id="point-{{ $item->id }}" onclick="HandleClickJsonData({{ json_encode($item) }})">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-[20px] font-semibold">{{ $item->description }}</h4>
                            <h4 class="text-[16px]">{{ $item->point }} Poin</h4>
                        </div>
                        <div>
                            <div
                                class="point-border flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                                <div class="point-bullet h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end: Point Item --}}
            @endforeach
        </div>
        {{-- end: Choose Point --}}
        {{-- Point Action --}}
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-[16px] font-semibold">Penukaran Poin</h4>
                    <h4 class="text-[20px]" id="point-exchange">-</h4>
                    <input type="number" class="hidden">
                </div>
                <div>
                    <form action="{{ url('/member/point') }}" method="POST">
                        @csrf
                        <input name="point_exchange_id" id="point_exchange_id" type="text" class="hidden" required>
                        <input name="type" value="point" type="text" class="hidden" required>
                        <button type="submit"
                            class="flex h-[40px] w-[127px] items-center justify-center rounded-xl bg-primary font-semibold text-white transition duration-300 active:scale-95">
                            Tukar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- end: Point Action --}}
        {{-- end: Content --}}
    </div>
</dialog>

<script>
    const currentUserPoint = {{ Auth::user()->user_wallet->current_point }}
    const pointLength = {{ count($point_exchange) }};
    const HandleClickJsonData = (data) => {
        if (currentUserPoint < data.point) {
            return alert('point belum cukup')
        }
        for (let index = 1; index <= pointLength; index++) {
            $(`#point-${index}`).removeClass('border-green-500');
            $(`#point-${index} .point-border`).removeClass('border-green-500');
            $(`#point-${index} .point-bullet`).removeClass('bg-primary');
        }

        $(`#point-${data.id}`).addClass('border-green-500');
        $(`#point-${data.id} .point-border`).addClass('border-green-500');
        $(`#point-${data.id} .point-bullet`).addClass('bg-primary');
        $('#point-exchange').text(`${data.point} point`);
        $(`#point_exchange_id`).val(data.id);
    }
</script>
