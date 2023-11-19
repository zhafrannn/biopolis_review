{{-- --}}
@extends('layouts.guest')

@section('content')
<section class="mb-[75px] hidden items-center justify-between px-[120px] lg:flex">
    <div class="w-[633px]">
        <h1 class="mb-[60px] w-[427px] text-[32px] font-semibold">Selamat datang kembali, silahkan masuk</h1>
        <div class="mb-[50px]">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-[30px] flex w-[472px] flex-col">
                    <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                    <input type="email" class="rounded-[15px] border p-4" placeholder="Masukan Email" name="email">
                </div>

                <div class="mb-[50px] flex w-[472px] flex-col">
                    <label for="" class="mb-[16px] text-[24px] font-semibold">Password</label>
                    <input type="password" class="rounded-[15px] border p-4" placeholder="Masukan Password" name="password">
                    <div class="flex justify-end">
                        <a href=""><small class="text-primary">Lupa password?</small></a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="rounded-[15px] bg-primary px-[214px] py-[14px] text-white">Login</button>
                </div>

            </form>
        </div>
        <div class="flex w-[427px] justify-center text-center">
            <div>
                <a href="{{ url('/register') }}">
                    Belum bisa login? Silahkan <span class="font-semibold">Registrasi</span> terlebih dahulu
                </a>
            </div>
        </div>
    </div>
    <div>
        <img src="{{ asset('images/img-hero.png') }}" alt="">
    </div>
</section>

<!-- mobile -->
<section class="flex flex-col items-center justify-between px-[24px] lg:hidden">
    <div class="w-[100%]">
        <h1 class="mb-[60px] text-[21.129px] font-semibold">Selamat datang kembali, silahkan masuk</h1>
        <div class="mb-[10px]">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-[70px]">
                    <div class="mb-[30px] flex flex-col">
                        <label for="" class="mb-[10px] text-[14px] font-semibold">Email</label>
                        <input type="text" class="rounded-[9.904px] border p-[10.56px]" placeholder="Masukan Email" name="email">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="mb-[10px] text-[14px] font-semibold">Password</label>
                        <input type="password" class="rounded-[9.904px] border p-[10.56px]" placeholder="Masukan Password" name="password">

                        <div class="flex justify-end">
                            <a href=""><small class="text-primary">Lupa password?</small></a>
                        </div>
                    </div>
                </div>
                <div class="pt-[60px]">
                    <button type="submit" class="w-[100%] rounded-[9.904px] bg-primary px-[141.299px] py-[9.244px] text-white">Masuk</button>
                </div>

            </form>
        </div>
        <div class="flex justify-center text-center">
            <div>
                <span class="text-[10px]">
                    Belum bisa login? Silahkan
                    <a href="{{ url('/register') }}" class="font-semibold">
                        Registrasi
                    </a>
                    terlebih dahulu
                </span>
            </div>
        </div>
    </div>
</section>
<!-- end mobile -->
@endsection