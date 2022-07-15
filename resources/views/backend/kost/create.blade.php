@extends('home')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Kost</h4>
        <form action="{{ route('store-kosan') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputName1">Type Kost</label>
            <select class="form-control @error('boarding_type') is-invalid @enderror" id="floatingInput" name="boarding_type" value="{{ old('boarding_type') }}">
                <option label="silahkan isi..."></option>
                <option value="Kost Putra">Kost Putra</option>
                <option value="Kost Putri">Kost Putri</option>
                <option value="Kost Campuran">Kost Campuran</option>
                <option value="Kost Pasutri">Kost Pasutri</option>
              </select>
              @error('boarding_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nama Jalan</label>
            <input type="text" class="form-control @error('street_name') is-invalid @enderror" id="floatingInput" placeholder="Nama Jalan" name="street_name" value="{{ old('street_name') }}">
            @error('street_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Harga Kost</label>
            <input type="number" class="form-control  @error('price') is-invalid @enderror" id="floatingInput" placeholder="Harga" name="price" value="{{ old('price') }}">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Detail </label>
            <textarea type="text" class="form-control  @error('details') is-invalid @enderror" id="floatingInput" placeholder="Detail" name="details">{{ old('details') }}</textarea>
            @error('details')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Tambah Kost</button>
        </form>
      </div>
    </div>
  </div>

@endsection
