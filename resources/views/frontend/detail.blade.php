@extends('frontend.layout.app')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="../fashi-shayna/index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{asset('frontend2/img/mickey5.jpg')}}" alt="" />
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="{{asset('frontend2/img/mickey5.jpg')}}" >
                                        <img src="{{asset('frontend2/img/mickey5.jpg')}}" height="240px" alt="" />
                                    </div>

                                    <div class="pt" data-imgbigurl="{{asset('frontend2/img/mickey2.jpg')}}"">
                                        <img src="{{asset('frontend2/img/mickey2.jpg')}}" height="240px" alt="" />
                                    </div>

                                    <div class="pt" data-imgbigurl="{{asset('frontend2/img/mickey3.jpg')}}">
                                        <img src="{{asset('frontend2/img/mickey3.jpg')}}" height="240px" alt="" />
                                    </div>

                                    <div class="pt" data-imgbigurl="{{asset('frontend2/img/mickey4.jpg')}}">
                                        <img src="{{asset('frontend2/img/mickey4.jpg')}}" height="240px" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3>Kost Khusus Putri</h3>
                                </div>
                                <div class="pd-desc">
                                    <p>
                                        Berada di kecematan panakkukan, kelurahan masale tepatnya di jln.abdullah daeng sirua lorong 2. 
                                    </p>
                                    <p>Lokasinya sangat strategis karna dekat dengan beberapa tempat yang sering dikunjungi seperti mall panakukang, kampus-kampus ternama, serta toko kebutuhan-kebutuhan yang lainnya. Dijamin aman dari banjir dan juga tersedia parkiran motor. Luas kamar sekitar 4x6 meter, kamar mandi dalam, dan dapur umum.</p>
                                    <p>Fasilitasnya terdapat 1 buah lemari, 1 buah springbet ukuran 120x200cm beserta spreinya, 1 buah AC, 2 buah bantal (1 bantal biasa 1 bantal guling), 1 set gorden jendela, 1 buah kipas angin turbo, 1 buah meja belajar dan 1 buah kursi, serta wifi.</p>
                                    <h4>Rp9.000.000/tahun</h4>
                                    <h4>Rp1.000.000/bulan</h4>
                                </div>
                                <div class="quantity">
                                    <a href="shopping-cart.html" class="primary-btn pd-cart">Booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Boarding House</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('frontend2/img/products/women-1.jpg')}}" height="175px" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="../fashi-shayna/product.html">Detail</a></li>
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
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('frontend2/img/products/women-2.jpg')}}" height="175px" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="../fashi-shayna/product1.html">Detail</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">kost khusus putra</div>
                            <a href="#">
                                <h5>Jln.abdullah dg sirua lorong 10</h5>
                            </a>
                            <div class="product-price">
                                Rp.5.500.000/tahun
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('frontend2/img/products/women-3.jpg')}}" height="175px" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="../fashi-shayna/product2.html">Detail</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">kost campuran</div>
                            <a href="#">
                                <h5>Jln.abdullah dg sirua lorong 12</h5>
                            </a>
                            <div class="product-price">
                                Rp6.000.000/tahun
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('frontend2/img/products/women-4.jpg')}}" height="175px" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="../fashi-shayna/product3.html">Detail</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">pasutri</div>
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
    <!-- Related Products Section End -->
    @endsection