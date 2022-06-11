@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">table Pembeli</h4>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Lengkap </th>
                                <th> Email </th>
                                <th> No hp</th>
                                <th> Alamat </th>
                                <th> Created At </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pembeli as $pembeli => $beli)
                                <tr>
                                    <td>{{ $pembeli + $data_pembeli->firstitem() }}</td>
                                    <td>{{ $beli->nama_lengkap }}</td>
                                    <td>{{ $beli->email }}</td>
                                    <td>{{ $beli->no_hp }}</td>
                                    <td>{{ $beli->alamat }}</td>
                                    <td>{{ $beli->created_at }}</td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="{{ route('delete-pembeli', $beli->id) }}" method="post">
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

    {{ $data_pembeli->links() }}
@endsection
