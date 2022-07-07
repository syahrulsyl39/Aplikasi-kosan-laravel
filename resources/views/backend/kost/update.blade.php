@extends('home')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('update-kosan', $boarding->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Type Kost</label>
            <select class="form-control @error('boarding_type') is-invalid @enderror" id="floatingInput" name="boarding_type">
                <option @if ($boarding->boarding_type == "Kost Putra") selected @endif value="Kost Putra">Kost Putra</option>
                <option @if ($boarding->boarding_type == "Kost Putri") selected @endif value="Kost Putri">Kost Putri</option>
                <option @if ($boarding->boarding_type == "Kost Campuran") selected @endif value="Kost Campuran">Kost Campuran</option>
                <option @if ($boarding->boarding_type == "Kost Pasutri") selected @endif value="Kost Pasutri">Kost Pasutri</option>
              </select>
              @error('boarding_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nama Jalan</label>
            <input type="text" class="form-control @error('street_name') is-invalid @enderror" id="floatingInput" placeholder="Nama Jalan" name="street_name" value="{{ $boarding->street_name }}">
            @error('street_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Harga</label>
            <input type="text" class="form-control  @error('price') is-invalid @enderror" id="floatingInput" placeholder="Harga" name="price" value="{{ $boarding->price }}">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
          </div>
          <div class="form-group">
            <label for="floatingInput">Foto</label><br>
            <small>Pilih gambar jika ingin mengubah</small>
            <input type="file" class="form-control" id="floatingInput"
                placeholder="Foto" name="picture" value="{{ $boarding->picture }}">
            @if ($boarding->picture)
                <img class="mt-3" width="100px" height="100px" src="{{ asset('storage/' .$boarding->picture) }}" alt="scascs">
            @else
            <p>Gamabar Tidak Tersedia</p>
            @endif
        </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection
