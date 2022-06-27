@extends('frontend.layout.app')

@section('content')

    <div class="d-flex success-checkout align-items-center justify-content-center">
        <div class="col col-lg-4 text-center">
            <img src="{{asset('frontend2/img/success-buy.png')}}" alt="" width="294">
            <h3 class="mt-4">
                Sukses Terbayar!
            </h3>
            <p class="mt-2">
                Silakan tunggu update terbaru dari kami via email yang sudah Anda daftarkan sebelumnya.
            </p>
            <a href="index.html" class="primary-btn pd-cart mt-3">Back to Home</a>
        </div>
    </div>
    @endsection