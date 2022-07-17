@extends('home')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Kost</h4>
        <form action="{{ route('update-kosan', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Type Kost</label>
            <select class="form-control @error('boarding_type') is-invalid @enderror" id="floatingInput" name="boarding_type" >
                <option label="silahkan isi..."></option>
                <option @if ( $product->boarding_type == "Kost Khusus Putra" ) selected @endif value="Kost Khusus Putra">Kost Khusus Putra</option>
                <option @if ( $product->boarding_type == "Kost Khusus Putri" ) selected @endif value="Kost Khusus Putri">Kost Khusus Putri</option>
                <option @if ( $product->boarding_type == "Kost Khusus Campuran" ) selected @endif value="Kost Khusus Campuran">Kost Khusus Campuran</option>
                <option @if ( $product->boarding_type == "Kost Khusus Pasutri" ) selected @endif value="Kost Khusus Pasutri">Kost Khusus Pasutri</option>
              </select>
              @error('boarding_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nama Jalan</label>
            <input type="text" class="form-control @error('street_name') is-invalid @enderror" id="floatingInput" placeholder="Nama Jalan" name="street_name" value="{{ $product->street_name }}">
            @error('street_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Harga Kost</label>
            <input type="number" class="form-control  @error('price') is-invalid @enderror" id="floatingInput" placeholder="Harga" name="price" value="{{ $product->price }}" >
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Detail </label>
            <textarea type="text" class="form-control  @error('details') is-invalid @enderror" id="floatingInput" placeholder="Detail" name="details" >{{ $product->details }}</textarea>
            @error('details')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="floatingInput">Foto Pengurus</label><br>
            <small>Pilih gambar jika ingin mengubah</small>
            <input type="file" value="{{  $product->photo }}" class="form-control" id="floatingInput" placeholder="Foto" name="photo">
            @if ( $product->photo )
            <img src="{{ asset ('storage/' .$product->photo) }}" alt="hello" class="mt-3" width="100px" height="100px">
            @endif
        </div>
          <button type="submit" class="btn btn-primary mr-2">Tambah Kost</button>
        </form>
      </div>
    </div>
  </div>

@endsection
