@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <h1>Tabel Collection</h1>
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
                    @foreach ($koleksi as $k)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $k->namaKoleksi }}</td>
                            <td>
                                @switch($k->jenisKoleksi)
                                    @case(1)
                                        Buku
                                    @break

                                    @case(2)
                                        Majalah
                                    @break

                                    @case(3)
                                        Cakram Digital
                                    @break

                                    @default
                                        Jenis Tidak Diketahui
                                @endswitch
                            </td>

                            <td><button type="button" class="btn btn-outline-primary"><a
                                        href="/koleksiView/{{ $k->id }}">Show Detail</a></button></td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
