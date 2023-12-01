<div id="rekening" class="hidden w-[100%] px-[44px] py-[47.41px] pl-[380px]">
    <p class="text-[32px] font-semibold text-[#0A0A0B]">Rekening Anda</p>
    <div class="mt-7 flex w-[100%] flex-col justify-between rounded-2xl border border-[#E5E5E5] px-[24px] py-[24px]">
        <div class="flex w-[100%] flex-col justify-between rounded-2xl border border-primary bg-[#F2FFF5] px-[24px] py-[24px]">
            <form action="{{ route('bank')}}" method="POST">
                @csrf
                <div class="flex items-center">
                    <img src="{{ asset('images/icons/card.svg') }}" alt="icon" class="px-6">
                    <div class="flex h-[208px] w-[806px] flex-col gap-8">
                        <div class="flex w-[100%] flex-col">
                            <label class="text-[20px] font-semibold text-[#969EBA]">Pemilik
                                Rekening</label>
                            <input type="text" class="flex h-[50px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->nama_rekening }}" name="nama_rekening">
                        </div>
                        <div class="W-[100%] flex justify-between">
                            <div class="w-[387px]] flex flex-col">
                                <label class="text-[20px] font-semibold text-[#969EBA]">Bank</label>
                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->nama_bank }}" name="nama_bank">
                            </div>
                            <div class="flex w-[387px] flex-col">
                                <label class="text-[20px] font-semibold text-[#969EBA]">No Rekening</label>
                                <input type="text" class="flex h-[50px] w-[387px] rounded-2xl border border-[#969EBA] bg-transparent pl-3 text-[20px]" value="{{ Auth::user()->user_biodata->no_rekening }}" name="no_rekening">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 flex justify-end">
                    <button class="btn w-fit rounded-xl px-6 py-4 text-[12px] font-semibold text-[#969EBA]" type="submit">Ganti
                        Rekening</button>
                </div>
            </form>
        </div>
    </div>


</div>