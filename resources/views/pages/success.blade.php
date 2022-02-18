@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('/frontend/image/sucess icon.png')}}" alt="">
            <h1>Selamat Transaksi Sukses</h1>
            <p>
                Cek Email untuk Intruksi Lebih Lanjut
                <br> Baca dengan Seksama
            </p>
            <a href="{{url('/')}}" class="btn btn-homepage mt-3 px-5">
                Home
            </a>
        </div>
    </div>
</main>
@endsection
