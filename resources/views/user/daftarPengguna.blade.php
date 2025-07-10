@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <h1>Tabel User</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="tabelUser">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($users as $u)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td><button type="button" class="btn btn-outline-primary"><a
                                        href="/userView/{{ $u->id }}">Show Detail</a></button></td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
