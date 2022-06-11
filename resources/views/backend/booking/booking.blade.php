@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">table Booking</h4>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama kosan </th>
                                <th> Price </th>
                                <th> Gambar</th>
                                <th> Created At </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_booking as $booking => $bookings)
                                <tr>
                                    <td>{{ $booking + $data_booking->firstitem() }}</td>
                                    <td>{{ $bookings->nama_kosan }}</td>
                                    <td>{{ $bookings->price }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $bookings->gambar) }}" alt="">
                                    </td>
                                    <td>{{ $bookings->created_at }}</td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="{{ route('delete-booking', $bookings->id) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-outline-danger btn-icon-text">
                                                    <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ $data_booking->links() }}
@endsection
