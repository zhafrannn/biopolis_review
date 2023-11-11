@extends('layouts.guest')

@section('content')
    <section class="mb-[75px] flex items-center justify-between px-[120px]">
        <div class="w-[633px]">
            <h1 class="mb-[60px] w-[427px] text-[32px] font-semibold">Selamat datang kembali, silahkan masuk</h1>
            <div class="mb-[50px]">
                <form action="">
                    <div class="mb-[30px] flex w-[472px] flex-col">
                        <label for="" class="mb-[16px] text-[24px] font-semibold">Email</label>
                        <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Email">
                    </div>

                    <div class="mb-[50px] flex w-[472px] flex-col">
                        <label for="" class="mb-[16px] text-[24px] font-semibold">Password</label>
                        <input type="text" class="rounded-[15px] border p-4" placeholder="Masukan Password">
                        <div class="flex justify-end">
                            <a href=""><small class="text-primary">Lupa password?</small></a>
                        </div>
                    </div>

                    <div>
                        <button class="rounded-[15px] bg-primary px-[214px] py-[14px] text-white">Login</button>
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
@endsection
