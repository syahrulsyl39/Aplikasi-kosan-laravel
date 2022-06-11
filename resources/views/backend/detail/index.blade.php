@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Detail</h4>
                <a href="{{ route('create-detail') }}" class="btn btn-outline-success btn-fw">Tambah Data</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Jenis Kosan </th>
                                <th> Deskripsi </th>
                                <th> Harga </th>
                                <th> Gambar </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_detail as $detail => $det)
                                <tr>
                                    <td>{{ $detail + $data_detail->firstitem() }}</td>
                                    <td>{{ $det->kosan->jeniskosan }}
                                    </td>
                                    <td>{{ $det->deskripsi }}</td>
                                    <td>{{ $det->harga }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $det->gamabr) }} " alt="">
                                    </td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="{{ route('delete-detail', $det->id) }}" method="post">
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
    {{ $data_detail->links() }}
@endsection
