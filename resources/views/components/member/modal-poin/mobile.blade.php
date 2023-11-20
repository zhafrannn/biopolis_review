<!-- You can open the modal using ID.showModal() method -->

<button onclick="modal_point_mobile.showModal()" class="btn h-16 w-[100%] bg-primary text-[20px] font-semibold text-white">Tukar
    Poin</button>
<dialog id="modal_point_mobile" class="modal p-5">
    <div class="relative w-full rounded-[15px] bg-white overflow-y-auto">
        <div class="flex items-center gap-2 border-b p-4 shadow-[0_2px_4px_0_rgba(0,0,0,0.15)]">
            <form method="dialog">
                <button class="w- h-[32px] w-[32px] rounded-full border-2 border-black">✕</button>
            </form>

            <div>
                <h3 class="text-[20px] font-semibold">Tukar Poin</h3>
            </div>
        </div>
        {{-- Content --}}
        {{-- Title --}}
        <div class="p-4">
            <div class="flex justify-between">
                <h4 class="text-[16px] font-semibold">Pilih Reward</h4>
                <div class="flex flex-col items-end text-[16px] font-semibold text-primary">
                    <h4>Poin Kamu</h4>
                    <h4>500</h4>
                </div>
            </div>
        </div>
        {{-- End Title --}}
        {{-- Choose Point --}}
        <div>
            {{-- Point Item --}}
            <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-[20px] font-semibold">Rp4.000.000</h4>
                        <h4 class="text-[16px]">500 Poin</h4>
                    </div>
                    <div>
                        <div class="point-border flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                            <div class="point-bullet h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Point Item --}}
            {{-- Point Item --}}
            <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-[20px] font-semibold">Rp10.000.000</h4>
                        <h4 class="text-[16px]">1.000 Poin</h4>
                    </div>
                    <div>
                        <div class="point-border flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                            <div class="point-bullet h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Point Item --}}
            {{-- Point Item --}}
            <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-[20px] font-semibold">Motor + Rp5.000.000</h4>
                        <h4 class="text-[16px]">2000 Poin</h4>
                    </div>
                    <div>
                        <div class="point-border flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                            <div class="point-bullet h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Point Item --}}
            {{-- Point Item --}}
            <div class="point-item cursor-pointer border-b-4 border-[#E5E5E5] p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="text-[20px] font-semibold">Umroh + Rp10.000.000</h4>
                        <h4 class="text-[16px]">3000 Poin</h4>
                    </div>
                    <div>
                        <div class="point-border flex h-[24px] w-[24px] items-center justify-center rounded-full border-[3px] border-[#969EBA]">
                            <div class="point-bullet h-[16px] w-[16px] rounded-full bg-[#969EBA]"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end: Point Item --}}

        </div>
        {{-- end: Choose Point --}}
        {{-- Point Action --}}
        <div class="p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h4 class="text-[16px] font-semibold">Penukaran Poin</h4>
                    <h4 class="text-[20px]">500 Poin</h4>
                </div>
                <div>
                    <button class="flex h-[40px] w-[127px] items-center justify-center rounded-xl bg-primary font-semibold text-white">
                        Tukar
                    </button>
                </div>
            </div>
        </div>
        {{-- end: Point Action --}}
        {{-- end: Content --}}
    </div>
</dialog>

<script>
    const pointItem = document.querySelectorAll('.point-item')
    const pointBorder = document.querySelectorAll('.point-border')
    const pointBullet = document.querySelectorAll('.point-bullet')
    for (let index = 0; index < pointItem.length; index++) {
        pointItem[index].addEventListener("click", () => {

            for (let bulletRemove = 0; bulletRemove < pointBorder.length; bulletRemove++) {
                pointBorder[bulletRemove].classList.remove('border-primary')
                pointBullet[bulletRemove].classList.remove('bg-primary')
                pointBorder[bulletRemove].classList.add('border-[#969EBA]')
                pointBullet[bulletRemove].classList.add('bg-[#969EBA]')
            }

            pointBorder[index].classList.remove('border-[#969EBA]')
            pointBullet[index].classList.remove('bg-[#969EBA]')
            pointBorder[index].classList.add('border-primary')
            pointBullet[index].classList.add('bg-primary')
        });
    }
</script>