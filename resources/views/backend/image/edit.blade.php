@extends('master')
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Image</h4>
                <form class="forms-sample" action="{{ route('update-image', $data_image->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>File upload</label>

                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="gambar" placeholder="Upload Image"
                                value="{{ $data_image->gambar }}">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Tambah Image</button>
                </form>
            </div>
        </div>
    </div>
@endsection
