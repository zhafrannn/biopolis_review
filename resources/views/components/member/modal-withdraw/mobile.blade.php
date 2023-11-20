<dialog id="modal_input_nominal_mobile" class="modal p-5">
    <div class="modal-box relative p-0 bg-white w-full z-[100] overflow-hidden">
        <form method="dialog" class="absolute pt-[22px] pl-2">
            <button class="btn btn-sm btn-circle absolute ">✕</button>
        </form>

        <div class="items-center mb-6 pb-3" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);">
            <h3 class="font-semibold text-[20px] mb-6 pl-11 pt-6">Pencairan Saldo</h3>

        </div>
        <form action="{{ url('/member/withdraw/'. Auth::user()->id)}}" method="post">
            @csrf
            <div class="border-b-2 w-full gap-6">
                <div class="px-6">
                    <div class="flex mb-6">
                        <p class="text-[16px] font-semibold">Isi Nominal Pencairan</p>

                    </div>
                    <div class="mb-6">
                        <div class="flex">
                            <p class="font-semibold text-[16px]">Rp </p>
                            <input type="number" class="font-semibold text-[16px] w-full" min="50000" name="withdraw" required>
                        </div>
                        <p class="text-[10px] text-end">*minimal pencairan Rp50.000</p>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <div class="">
                            <p class="text-[16px] font-semibold">Rekening Tujuan</p>
                            <p class="text-[16px]">{{ Auth::user()->user_biodata->nama_rekening }}</p>
                            <p class="text-[16px]">{{ Auth::user()->user_biodata->nama_bank ." · ". Auth::user()->user_biodata->no_rekening }}</p>
                        </div>
                        <div class="rounded-full border-[2px] border-primary w-6 h-6 flex justify-center items-center">
                            <div class="w-4 h-4 bg-primary rounded-full "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4">
                <button class="text-[16px] font-semibold p-[8px_40px] btn-primary rounded-xl w-full" type="submit">Lakukan Pencairan</button>
            </div>
        </form>
        <!-- @include('components.member.modal-withdraw.modal-proses-pembayaran') -->



    </div>
</dialog>