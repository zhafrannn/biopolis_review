@extends('layouts.auth-user')

@section('title')
    Checkout Product
@endsection

@section('content')
    <section class="flex h-full w-[100%] flex-col items-center justify-center py-4 text-center">
        <img src="{{ asset('images/img-hero.png') }}" class="h-56" alt="">
        <div class="mb-5 w-[600px]">
            <h1 class="text-xl font-bold text-primary">Anda harus melakukan pembelian produk terlebih dahulu</h1>
        </div>
        <div class="min-w-[600px] rounded-xl bg-white p-5 shadow-lg">

            @if (empty($user_payment))
                <form action="{{ url('/user-payment-activation') }}" method="post">
                    @csrf
                    <div>
                        <h3 class="text-2xl font-semibold">Paket Biopolis</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="mb-5 flex flex-col items-start gap-2">
                        <label for="" class="font-semibold">Pengambilan</label>
                        <select class="w-full rounded-2xl border border-primary p-3" name="shipping_type" id="">
                            <option value="on_send">Dikirim</option>
                            <option value="on_location">Ambil Ditempat</option>
                        </select>
                        <input type="text" name="product_id" value="{{ $product->id }}" class="hidden" id="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-2 text-lg">
                            <h4>Harga: </h4>
                            <h4 class="font-semibold">Rp{{ number_format($product->price) }},-</h4>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </form>
            @else
                {{-- <p class="text-2xl font-bold text-primary">Lakukan Pembayaran</p> --}}
                <a href="{{ $user_payment->redirect_url }}" class="btn btn-primary" target="_blank">
                    Lakukan Pembayaran
                </a>
                <p>{{ $user_payment->status }}</p>
            @endif
        </div>
    </section>
@endsection
