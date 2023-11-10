<style>
    .cntn {
        padding: 0 40px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>
<aside class="fixed h-screen w-[340px] px-[40.32px] py-[47.41px] text-[#0A0A0B]">
    {{-- start: Side Menu --}}
    <div class="flex flex-col justify-between gap-[20.32px] rounded-[12.7px] border border-[#E5E5E5] py-[20.32px]">
        {{-- start: nav item --}}
        <a href="" class="pl-2">
            <div class="flex items-center gap-[6.77px] px-[14px]">
                <p class="font-semibold text-primary text-[20px]">Profil Pengguna</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}

        {{-- start: nav item --}}
        <a href="" class="pl-2">
            <div class="flex items-center gap-[6.77px] px-[14px]">
                <p class="font-semibold text-[20px]">Alamat Penerima</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}

        {{-- start: nav item --}}
        <a href="" class="pl-2">
            <div class="flex items-center gap-[6.77px] px-[14px]">
                <p class="font-semibold text-[20px]">Rekening</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}
        <div class="flex justify-center items-center">
            <div class=" flex w-11/12 h-[1px] border justify-center "></div>

        </div>

        {{-- start: nav item --}}
        <a href="" class="pl-2">
            <div class="flex items-center gap-[6.77px] px-[14px]">
                <img class="w-6" src="{{ asset('images/icons/logout.svg') }}" alt="">
                <p class="font-semibold text-[#E30613] text-[20px]">Keluar</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden  w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}



    </div>
    {{-- end: Side Menu --}}
</aside>

<script>
    let dropdownCollapse = document.querySelectorAll('.dropdown-coll')
    for (let index = 0; index < dropdownCollapse.length; index++) {
        dropdownCollapse[index].addEventListener('click', () => {
            let dropdownContent = document.querySelectorAll('.dropdown-ctn')
            dropdownContent[index].classList.toggle("max-h-[400px]")
        })
    }
</script>