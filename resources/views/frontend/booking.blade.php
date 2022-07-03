@extends('frontend.layout.app')

@section('content')
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mb-4">
                                Data Pemesan:
                            </h4>
                            <div class="user-checkout">
                                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                   <div class="row col-12 m-auto">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="namaLengkap">Nama lengkap</label>
                                            <input type="text" class="form-control  @error('customer_name') is-invalid @enderror" id="floatingInput" name="customer_name">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="namaLengkap">Email Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="namaLengkap">No. HP</label>
                                            <input type="text" class="form-control @error('no_phone') is-invalid @enderror" id="floatingInput" name="no_phone">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="namaLengkap">Type Kost</label>
                                            <input type="text" class="form-control @error('boarding_type') is-invalid @enderror" id="floatingInput" name="boarding_type">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="namaLengkap">Total Biaya</label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="floatingInput" name="address">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="namaLengkap">Alamat</label>
                                            <input type="" class="form-control @error('total_cost') is-invalid @enderror" id="floatingInput" name="total_cost">
                                            @error('customer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Kirim
                                    </button>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
    @endsection
