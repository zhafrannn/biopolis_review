<dialog id="metode_pembayaran" class="modal">
    <div class="modal-box relative p-0 bg-white w-[447px] z-[100]">
        <form method="dialog" class="absolute pt-[22px] pl-2">
            <button class="btn btn-sm btn-circle absolute ">✕</button>
        </form>

        <div class="items-center mb-6 pb-6" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);">
            <h3 class="font-semibold text-[20px] mb-6 pl-11 pt-6">Pembayaran</h3>
            <div class="flex justify-between items-center">
                <div class="flex pl-6 items-center">
                    <img src="{{ asset('images/icons/timer.svg') }}" alt="">
                    <p class="text-[14px]">Selesaikan Pembayaran Dalam</p>
                </div>
                <div class="flex pr-6">
                    <p class="bg-[#E30613] text-white p-2 rounded-[5px]">00</p>
                    <p class=" text-[#E30613] p-2">:</p>
                    <p class="bg-[#E30613] text-white p-2 rounded-[5px]">00</p>
                    <p class=" text-[#E30613] p-2">:</p>
                    <p class="bg-[#E30613] text-white p-2 rounded-[5px]">00</p>
                </div>
            </div>
        </div>

        <div class="border-b-2 w-full gap-6">
            <div class="px-6">
                <div class="flex justify-between mb-6">
                    <p class="text-[16px] font-semibold">Metode Pembayaran</p>
                    <button class="text-[14px] bg-none text-primary" onclick="pilih_metode_pembayaran.showModal()">Lihat Semua</button>
                    @include('components/member/modal-pilih-bank')
                </div>
                <div class="flex justify-between mb-6">
                    <div class="flex items-center">
                        <img src="{{ asset('images/bank-bca.png') }}" alt="bank" class="w-[48px] h-[15px] pr-3">
                        <p class="font-semibold text-[16px]">BCA Virtual Account</p>
                    </div>
                    <div class="rounded-full border-[2px] border-primary w-6 h-6 flex justify-center items-center">
                        <div class="w-4 h-4 bg-primary rounded-full "></div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-[16px] font-semibold p-6">Ringkasan Pembayaran</p>
        <div class="px-6 pb-6 border-b-4">
            <div class="flex justify-between">
                <p class="text-[16px]">Total Belanja</p>
                <p class="text-[16px]">Rp2.000.000</p>
            </div>
            <div class="flex justify-between">
                <p class="text-[16px]">Biaya Lain</p>
                <p class="text-[16px]">Rp1.000</p>
            </div>
        </div>

        <div class="flex justify-between p-6">
            <div class="flex flex-row">
                <p class="text-[16px] font-semibold">Total Tagihan</p>
                <p class="text-[16px] font-semibold">Rp2.001.000</p>
            </div>
            <button class="btn btn-primary rounded-xl">Bayar</button>
        </div>
    </div>
</dialog>