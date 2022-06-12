@extends('master')
@section('main')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">table Administrator</h4>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Lengkap </th>
                                <th> Email </th>
                                <th> Creator</th>
                                <th> Foto </th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_user as $users => $user)
                                <tr>
                                    <td>{{ $users + $data_user->firstitem() }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <img width="100px" src="{{ asset('storage/' . $user->foto) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="template-demo mt-2">

                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')

                                                <a href="{{ route('edit-user', $user->id) }}"
                                                    class="btn btn-outline-primary btn-icon-text"> <i
                                                        class="mdi mdi-file-check btn-icon-prepend"></i></a>


                                                <button type="submit" class="btn btn-outline-danger btn-icon-text">
                                                    <i class="mdi mdi-close-circle"></i> </button>
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

    {{ $data_user->links() }}
@endsection
