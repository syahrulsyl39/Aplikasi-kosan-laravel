@extends('home')

@section('content')
<div class="col-lg-12">
    <a href="{{ route('create-kosan') }}" class=" btn btn-success create-new-button">+ Create New</a>
</div><br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> No </th>
                <th> Type Kost </th>
                <th> Nama Jalan </th>
                <th> Harga </th>
                <th> Gambar </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $boarding as $key=>$item )
              <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td> {{ $item->boarding_type }}</td>
                <td> {{ $item->street_name }}</td>
                <td> {{ $item->price }} </td>
                <td> <img width="50px" height="70px" src="{{ asset ('storage/'.$item->picture) }}" alt="fesfh"> </td>
                <td>
                    <a href="{{ route('edit-kosan', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form style="display: inline" action="{{ route ('destroy-kosan', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
