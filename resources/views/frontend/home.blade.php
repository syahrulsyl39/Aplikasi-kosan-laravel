@extends('frontend.layout.app')

@section('content')

<!-- Hero Section Begin -->
<section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{asset('frontend2/img/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Kost Cicit</h1>
                            <p style="color: black;">kenyamanan anda paling utama (anda nyaman saya senang)</p>
                            <a href="" class="primary-btn">Check Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{asset('frontend2/img/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Kost Cicit</h1>
                            <p>kenyamanan anda paling utama (anda nyaman saya senang)</p>
                            <a href="#" class="primary-btn">Check Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('frontend2/img/mickey1.jpg')}}" height="220px" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('booking') }}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('detail') }}">Detail</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kost khusus putri</div>
                                <a href="#">
                                    <h5>Jln.abdullah dg sirua lorong 2</h5>
                                </a>
                                <div class="product-price">
                                    Rp9.000.000/tahun
                                    <span>Rp10.000.000/tahun</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('frontend2/img/products/women-2.jpg')}}" height="220px"  alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('booking') }}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('detail') }}">Detail</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kost khusus pria</div>
                                <a href="#">
                                    <h5>Jln.abdullah dg sirua lorong 10</h5>
                                </a>
                                <div class="product-price">
                                    Rp.5.500.000/tahun
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('frontend2/img/products/women-3.jpg')}}" height="220px" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('booking') }}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('detail') }}">Detail</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kost Campuran</div>
                                <a href="#">
                                    <h5>Jln.abdullah dg sirua lorong 12</h5>
                                </a>
                                <div class="product-price">
                                    Rp6.000.000/tahun
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('frontend2/img/products/women-4.jpg')}}" height="220px" alt="" />
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('booking') }}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('detail') }}">Detail</a></li>
                                    <li class="w-icon">
                                        <a href="#"><i class="fa fa-random"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kost Pasutri</div>
                                <a href="#">
                                    <h5>Jln.abdullah dg sirua lorong 5</h5>
                                </a>
                                <div class="product-price">
                                    Rp7.000.000/tahun
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-1.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-2.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-3.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-4.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-5.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('frontend2/img/insta-6.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">shayna_gallery</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->
    @endsection
