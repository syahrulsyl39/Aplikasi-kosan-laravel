@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Inverse table</h4>
                <a href="{{ route('create-image') }}" class="btn btn-outline-success btn-fw">Tambah Data</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Gambar </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_image as $image => $img)
                                <tr>
                                    <td>{{ $image + $data_image->firstitem() }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $img->gambar) }} " alt="">
                                    </td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="{{ route('delete-image', $img->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('edit-image', $img->id) }}"
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
    {{ $data_image->links() }}
@endsection
