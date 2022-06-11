@extends('master')
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Detail</h4>
                <form class="forms-sample" action="{{ route('store-detail') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1">Jenis kosan</label>
                        <select class="form-control" name="jeniskosan_id">
                            @foreach ($kosan as $item)
                                <option value="{{ $item->id }}">{{ $item->jeniskosan }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Deskripsi</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="deskripsi"
                            name="deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Harga</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="harga"
                            name="harga">
                    </div>


                    <div class="form-group">
                        <label>File upload Gambar</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="gamabr"
                                placeholder="Upload Image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>File upload Detail Gambar</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="detail_gambar"
                                placeholder="Upload Image">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Tambah Detail</button>
                </form>
            </div>
        </div>
    </div>
@endsection
