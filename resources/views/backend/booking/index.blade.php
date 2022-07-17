@extends('home')

@section('content')
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
                <th> Nama Pelanggan </th>
                <th> Email </th>
                <th> No. Heandphone </th>
                <th> Type Kost </th>
                <th> Alamat </th>
                <th> Harga </th>
              </tr>
            </thead>
            <tbody>
              @forelse ( $booking as $item )
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td> {{ $item->customer_name }}</td>
                <td> {{ $item->email }}</td>
                <td> {{ $item->no_phone }} </td>
                <td> {{ $item->boarding_type }} </td>
                <td> {{ $item->address }} </td>
                <td> {{ $item->total_cost }} </td>
              </tr>
              @empty
              <tr>
                <td colspan="7" class="text-center p-5">
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
