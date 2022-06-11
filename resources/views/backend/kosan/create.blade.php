@extends('master')
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Kosan</h4>
                <form class="forms-sample" action="{{ route('store-kosan') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1">Jalan</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Jalan"
                            name="jalan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Harga</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="harga"
                            name="harga">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Janis Kosan</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="jenis kosan"
                            name="jeniskosan">
                    </div>


                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="gambar"
                                placeholder="Upload Image">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Tambah Kosan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
