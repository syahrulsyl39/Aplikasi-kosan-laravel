@extends('master')
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit user</h4>
                <form class="forms-sample" action="{{ route('update-user', $data_user->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Panjang</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Jalan"
                            value="{{ $data_user->name }}" name="name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="email" class="form-control" id="exampleInputUsername1" placeholder="harga"
                            name="email" value="{{ $data_user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">password</label>
                        <input type="password" class="form-control" name="possword">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Creator</label>
                        <select name="role" id="" class="form-control">
                            <option @if ($data_user->role) selected @endif value="admin">Admin</option>
                            <option @if ($data_user->role) selected @endif value="user">User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="foto" placeholder="Upload Image"
                                value="{{ $data_user->foto }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Edit Kosan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
