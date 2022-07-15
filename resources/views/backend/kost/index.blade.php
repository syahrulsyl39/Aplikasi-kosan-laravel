@extends('home')

@section('content')
<div class="col-lg-12">
    <a href="{{ route('create-kosan') }}" class=" btn btn-success create-new-button">+ Tambah Data</a>
</div><br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Kost</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> No </th>
                <th> Type Kost </th>
                <th> Nama Jalan </th>
                <th> Harga </th>
                <th> Detail </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
              @forelse ( $product as $key=>$item )
              <tr>
                <th>{{ $key+1 }}</th>
                <td>{{ $item->boarding_type	 }}</td>
                <td>{{ $item->street_name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->details }}</td>
                <td>
                    <a href="" class="btn btn-info btn-sm">
                        <i class="mdi mdi-image-area"></i>
                    </a>
                    <a href="{{ route('edit-kosan', $item->id) }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-pencil"></i>
                    </a>
                    <form action="{{ route('destroy-kosan', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="mdi mdi-delete"></i>
                        </button>
                    </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="6" class="text-center p-5">
                    Data tidak tersedia
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
