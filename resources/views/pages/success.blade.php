@extends('layouts.success')
@section('title')
    Checkout Success
@endsection
@section('content')
<!-- Main -->
<main>
    <div class="section-success d-flex align-items-center">
     <div class="col text-center">
         <img src="{{ url('frontend/images/email.png') }}" alt="">
         <h1>Yaay! Berhasil</h1>
         <p>
             Kami kirimkan E-mail untuk informasi Pembayaran
             <br>
             Silahkan Cek Inbok E-mail Anda.
         </p>
         <a href="{{ url('/') }}" class="btn btn-primary btn-home-page mt-3 px-5">
             Beranda
         </a>
     </div>
    </div>
</main>
@endsection