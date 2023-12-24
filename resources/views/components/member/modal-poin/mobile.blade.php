<!-- You can open the modal using ID.showModal() method -->

<button onclick="modal_point_mobile.showModal()" class="btn w-[100%] bg-primary font-semibold text-white">Tukar
    Poin</button>
<dialog id="modal_point_mobile" class="modal px-7 py-5">
    <div class="relative w-full overflow-y-auto rounded-[15px] bg-white">
        <div class="flex items-center gap-2 border-b px-6 py-3 shadow-[0_2px_4px_0_rgba(0,0,0,0.15)]">
            <form method="dialog">
                <button class="h-[24px] w-[24px] rounded-full border-2 border-black">✕</button>
            </form>
            <div>
                <h3 class="pl text-[16px] font-semibold">Tukar Poin</h3>
            </div>
        </div>
        {{-- Content --}}
        {{-- Title --}}
        <div class="px-6 py-3">
            <div class="flex justify-between">
                <h4 class="text-[14px] font-semibold">Pilih Reward</h4>
                <div class="flex flex-col items-end text-[14px] font-semibold text-primary">
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
            <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] px-6 py-3 transition duration-300 hover:border-green-500" id="point-mobile-{{ $item->id }}" onclick="HandleClickJsonDataMobile({{ json_encode($item) }})">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-[16px] font-semibold">{{ $item->description }}</h4>
                        <h4 class="text-[12px]">{{ $item->point }} Poin</h4>
                    </div>
                    <div>
                        <div class="point-border-mobile flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                            <div class="point-bullet-mobile h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Point Item --}}
            @endforeach
        </div>
        {{-- end: Choose Point --}}
        {{-- Point Action --}}
        <div class="px-6 py-3">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-[14px] font-semibold">Penukaran Poin</h4>
                    <h4 class="text-[20px]" id="point-mobile-exchange">-</h4>
                    <input type="number" class="hidden">
                </div>
                <div>
                    <form action="{{ url('/member/point') }}" method="POST">
                        @csrf
                        <input name="point_exchange_id" id="point_mobile_exchange_id" type="text" class="hidden" required>
                        <input name="type" value="point" type="text" class="hidden" required>
                        <button type="submit" class="flex h-[40px] w-[127px] items-center justify-center rounded-xl bg-primary font-semibold text-white transition duration-300 active:scale-95">
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
    const currentUserPointMobile = {{ Auth::user()->user_wallet->current_point }}
    const pointLengthMobile = {{ count($point_exchange) }};
    const HandleClickJsonDataMobile = (data) => {
        if (currentUserPointMobile < data.point) {
            return alert('point belum cukup')
        }
        for (let index = 1; index <= pointLengthMobile; index++) {
            $(`#point-mobile-${index}`).removeClass('border-green-500');
            $(`#point-mobile-${index} .point-mobile-border`).removeClass('border-green-500');
            $(`#point-mobile-${index} .point-mobile-bullet`).removeClass('bg-primary');
        }

        $(`#point-mobile-${data.id}`).addClass('border-green-500');
        $(`#point-mobile-${data.id} .point-mobile-border`).addClass('border-green-500');
        $(`#point-mobile-${data.id} .point-mobile-bullet`).addClass('bg-primary');
        $('#point-mobile-exchange').text(`${data.point} point`);
        $(`#point-mobile_exchange_id`).val(data.id);
    }
</script>