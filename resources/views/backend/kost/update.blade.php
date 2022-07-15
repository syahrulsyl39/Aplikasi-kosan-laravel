@extends('home')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ubah Data {{ $product->boarding_type }}</h4>
        <form action="{{ route('edit-kosan', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Type Kost</label>
            <select class="form-control @error('boarding_type') is-invalid @enderror" id="floatingInput" name="boarding_type">
                <option @if ($product->boarding_type == "Kost Putra") selected @endif value="Kost Putra">Kost Putra</option>
                <option @if ($product->boarding_type == "Kost Putri") selected @endif value="Kost Putri">Kost Putri</option>
                <option @if ($product->boarding_type == "Kost Campuran") selected @endif value="Kost Campuran">Kost Campuran</option>
                <option @if ($product->boarding_type == "Kost Pasutri") selected @endif value="Kost Pasutri">Kost Pasutri</option>
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
            <input type="text" class="form-control  @error('price') is-invalid @enderror" id="floatingInput" placeholder="Harga" name="price" value="{{ $product->price }}">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Detail</label>
            <input type="text" class="form-control  @error('details') is-invalid @enderror" id="floatingInput" placeholder="Harga" name="details" value="{{ $product->details }}">
            @error('details')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Kirim Perubahan data</button>
        </form>
      </div>
    </div>
  </div>

@endsection
