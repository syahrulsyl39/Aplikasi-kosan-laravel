@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">table Kosan</h4>
                <a href="{{ route('create-kosan') }}" class="btn btn-outline-success btn-fw">Tambah kosan</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Jalan </th>
                                <th> Harga </th>
                                <th> Jenis Kosan </th>
                                <th> Gambar </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kosan as $data_kosan => $kos)
                                <tr>
                                    <td>{{ $data_kosan + $kosan->firstitem() }}</td>
                                    <td>{{ $kos->jalan }}</td>
                                    <td>{{ $kos->harga }}</td>
                                    <td>{{ $kos->jeniskosan }}</td>
                                    <td>
                                        <img width="90px" src="{{ asset('storage/' . $kos->gambar) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="{{ route('delete-kosan', $kos->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('edit-kosan', $kos->id) }}"
                                                    class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                        class="mdi mdi-file-check btn-icon-append"></i>
                                                </a>
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

    {{ $kosan->links() }}
@endsection
