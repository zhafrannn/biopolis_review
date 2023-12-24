<dialog id="modal_mobile_exchange_balance" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
        </form>
        <div>
            <h3 class="mb-5 text-lg font-semibold text-[#969EBA]">Nominal Penukaran Saldo</h3>
            <form action="{{ url('/member/balance') }}" id="form-exchange" method="post">
                @csrf
                <div class="mb-5 flex flex-col gap-2 text-[14px]">
                    <label for="" class=" font-semibold">Nominal</label>
                    <p clas>Minimal penukaran Rp.100.000,-</p>
                    <input type="number" id="total_mobile_exchange_balance" name="total_exchange_balance" placeholder="0" class="input input-bordered w-full" />
                    <div class="">
                        <small id="alert-error-mobile" class="hidden text-error"></small>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="btn btn-primary" id="button-mobile-submit" type="submit" disabled>Submit</button>
                </div>
            </form>
        </div>
    </div>
</dialog>