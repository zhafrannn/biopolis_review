<dialog id="modal_input_nominal" class="modal">
    <div class="modal-box relative p-0 bg-white w-[447px] z-[100]">
        <form method="dialog" class="absolute pt-[22px] pl-2">
            <button class="btn btn-sm btn-circle absolute ">✕</button>
        </form>

        <div class="items-center mb-6 pb-3" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);">
            <h3 class="font-semibold text-[20px] mb-6 pl-11 pt-6">Pencairan Saldo</h3>

        </div>

        <div class="border-b-2 w-full gap-6">
            <div class="px-6">
                <div class="flex mb-6">
                    <p class="text-[16px] font-semibold">Isi Nominal</p>

                </div>
                <div class="mb-6">
                    <div class="flex">
                        <p class="font-semibold text-[32px]">Rp</p>
                        <input type="number" class="font-semibold text-[32px]">

                    </div>

                </div>
            </div>
        </div>
        <div class="px-6 py-4">
            <button class="text-[16px] font-semibold p-[8px_40px] btn-primary rounded-xl w-full" onclick="proses_pembayaran.showModal()">Lanjutkan</button>
        </div>
        @include('components.member.modal-withdraw.modal-proses-pembayaran')



    </div>
</dialog>