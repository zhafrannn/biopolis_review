<style>
    .cntn {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>
<aside
    class="fixed h-screen w-[264.13px] border bg-white px-[20.32px] py-[47.41px] text-[#0A0A0B] drop-shadow-[1.6px_0px_5px_#00000040]">
    <img src="{{ asset('images/logo.svg') }}" class="mb-[44.02px]" alt="">
    {{-- start: Side Menu --}}
    <div class="flex flex-col justify-between gap-[20.32px] rounded-[12.7px] border border-[#E5E5E5] py-[20.32px]">
        {{-- start: nav item --}}
        <a href="">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/home.svg') }}" alt="">
                <p class="font-semibold text-primary">Dashboard</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}
        {{-- start: nav item dropdown --}}
        <div class="">
            <button class="dropdown-coll w-full">
                <div class="relative flex items-center justify-between gap-[6.77px] px-[14px] group-target:border">
                    <div class="flex items-center gap-[6.77px]">
                        <img src="{{ asset('images/icons/box.svg') }}" alt="">
                        <p class="font-semibold">Produk</p>
                    </div>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" alt="">
                    <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                </div>
            </button>
            <div class="dropdown-ctn max-h-0 overflow-hidden transition-all duration-300">
                <a href="{{ url('/admin/produk/create') }}">
                    <div class="relative mb-[12.17px] pl-10">
                        <p class="">Tambah Produk</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0 top-0 z-50 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary">
                        </div>
                        {{-- if active remove hidden --}}
                    </div>
                </a>
                <a href="{{ url('/admin/produk') }}">
                    <div class="relative pl-10">
                        <p class="">Daftar Produk</p>
                        {{-- if active remove hidden --}}
                        <div class="absolute left-0 top-0 z-50 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary">
                        </div>
                        {{-- if active remove hidden --}}
                    </div>
                </a>
            </div>
        </div>
        {{-- end: nav item dropdown --}}
        {{-- start: nav item --}}
        <a href="{{ url('/admin/order') }}">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/truck-time.svg') }}" alt="">
                <p class="font-semibold">Pesanan</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}
        {{-- start: nav item --}}
        <a href="{{ url('/admin/user-management') }}">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/people.svg') }}" alt="">
                <p class="font-semibold">User Management</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}
        {{-- start: nav item --}}
        <a href="">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/element-equal.svg') }}" alt="">
                <p class="font-semibold">Content Management</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}

        {{-- start: nav item --}}
        <a href="{{ url('/admin/pengajuan-penukaran-poin') }}">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/money-change.svg') }}" alt="">
                <p class="font-semibold">Penukaran Poin</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}

        {{-- start: nav item --}}
        <a href="{{ url('/admin/pengajuan-penggantian-rekening') }}">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/card-edit.svg') }}" alt="">
                <p class="font-semibold">Penggantian Rekening</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
                {{-- if active remove hidden --}}
            </div>
        </a>
        {{-- end: nav item --}}

        {{-- start: nav item --}}
        <a href="{{ url('/admin/pengajuan-pencairan') }}">
            <div class="relative flex items-center gap-[6.77px] px-[14px]">
                <img src="{{ asset('images/icons/empty-wallet-time.svg') }}" alt="">
                <p class="font-semibold">Pencairan Afiliasi</p>
                {{-- if active remove hidden --}}
                <div class="absolute left-0 hidden h-full w-[3.39px] rounded-r-[12.7px] bg-primary"></div>
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
