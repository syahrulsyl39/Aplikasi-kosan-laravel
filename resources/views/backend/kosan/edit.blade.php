@extends('master')
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Kosan</h4>
                <form class="forms-sample" action="{{ route('update-kosan', $kosan->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Jalan</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Jalan"
                            value="{{ $kosan->jalan }}" name="jalan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Harga</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="harga" name="harga"
                            value="{{ $kosan->harga }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Janis Kosan</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="jenis kosan"
                            name="jeniskosan" value="{{ $kosan->jeniskosan }}">
                    </div>


                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="gambar"
                                placeholder="Upload Image" value="{{ $kosan->gambar }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Edit Kosan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
