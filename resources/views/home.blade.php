@extends('master')

@section('main')
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Kosan</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $kosan }}</h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">Kosan</p>
                            </div>
                            <h6 class="text-muted font-weight-normal">Jumlah kosan yang ada diCicit Kosan</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-city text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Penyewa</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $penyewa }}</h2>
                                <p class="text-danger ml-2 mb-0 font-weight-medium">Penyewa </p>
                            </div>
                            <h6 class="text-muted font-weight-normal">Jumlah Penyewa yang ada diCicit Kosan</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-account-multiple-outline text-success ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah Transaksi</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">2</h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">Transaksi</p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> Jumlah Transaksi yang ada diCicit Kosan</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-chart-areaspline text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
