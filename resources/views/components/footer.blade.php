<footer class="hidden bg-[#D6FFDE] lg:block">
    <div class="py-[86px] text-black">
        <div class="mb-[23px] grid grid-cols-3 px-[122px]">
            <div>
                <img src="{{ asset('logo.svg') }}" class="mb-[20.75px] w-[91px]" alt="">
                <p class="mb-[21px] max-w-[344px] text-[21px]">Some footer text about the Agency. Just a little
                    description to help
                    people understand you better</p>
                <div class="flex gap-[16px]">
                    <img src="{{ asset('images/facebook.png') }}" alt="">
                    <img src="{{ asset('images/twitter.png') }}" alt="">
                    <img src="{{ asset('images/linkedin.png') }}" alt="">
                    <img src="{{ asset('images/instagram.png') }}" alt="">
                </div>
            </div>
            <div>
                <h5 class="mb-[16px] text-[21px] font-semibold">Kontak</h5>
                <p class="mb-[26px] text-[19px]">biopolis@gmail.com</p>
                <p class="mb-[26px] text-[19px]">0811234567890</p>
                <p class="mb-[26px] text-[19px]">lainnya</p>
            </div>
            <div>
                <h5 class="mb-[16px] text-[21px] font-semibold">Alamat</h5>
                <p class="mb-[26px] text-[19px]">Cibiru Hili,Kota Bandung,Jawa Barat Indonesia</p>
                <p class="mb-[26px] text-[19px]">0811234567890</p>
                <p class="mb-[26px] text-[19px]">lainnya</p>
            </div>
        </div>
        <div class="flex items-end justify-end gap-[27px] px-[122px]">
            <img src="{{ asset('images/jamu.png') }}" alt="" class="h-[73px]">
            <img src="{{ asset('images/halal.png') }}" alt="" class="h-[73px]">
            <img src="{{ asset('images/bpom.png') }}" alt="" class="h-[73px]">
        </div>
    </div>
    <div class="flex h-[49px] items-center justify-center bg-primary text-white">
        <p>© 2023 Made With Love, Digital Inovation</p>
    </div>
</footer>

<!-- mobile -->
<footer class="bg-[#D6FFDE] lg:hidden">
    <div class="py-[15px] text-black">
        <div class="flex flex-col items-center px-[73px] text-center">
            <img src="{{ asset('logo.svg') }}" class="mb-[5px] w-[50px]" alt="">
            <p class="mb-[21px] text-[8px]">Some footer text about the Agency. Just a little
                description to help
                people understand you better</p>
        </div>

        <div class="mb-[23px] grid grid-cols-2 gap-[20px] px-[30px]">
            <div>
                <h5 class="mb-[16px] text-[11px] font-semibold">Kontak</h5>
                <p class="mb-[12px] text-[10px]">biopolis@gmail.com</p>
                <p class="mb-[12px] text-[10px]">0811234567890</p>
                <p class="mb-[12px] text-[10px]">lainnya</p>
            </div>
            <div>
                <h5 class="mb-[16px] text-[11px] font-semibold">Alamat</h5>
                <p class="mb-[12px] text-[10px]">Cibiru Hilir, Kota Bandung, Jawa Barat Indonesia</p>
                <div class="flex w-[100px] justify-between gap-[1px]">
                    <img src="{{ asset('images/jamu.png') }}" alt="" class="h-[31px]">
                    <img src="{{ asset('images/halal.png') }}" alt="" class="h-[31px]">
                    <img src="{{ asset('images/bpom.png') }}" alt="" class="h-[31px]">
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-[16px]">
            <img src="{{ asset('images/facebook.png') }}" alt="" class="w-[36.28px]">
            <img src="{{ asset('images/twitter.png') }}" alt="" class="w-[36.28px]">
            <img src="{{ asset('images/linkedin.png') }}" alt="" class="w-[36.28px]">
            <img src="{{ asset('images/instagram.png') }}" alt="" class="w-[36.28px]">
        </div>

    </div>
    <div class="flex h-[21px] items-center justify-center bg-primary text-white">
        <p class="text-[8px]">© 2023 Made With Love, Digital Inovation</p>
    </div>
</footer>
<!-- end mobile -->