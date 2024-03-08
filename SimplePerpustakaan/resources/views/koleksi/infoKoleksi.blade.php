@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            Data Koleksi
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $koleksi->namaKoleksi }}</h5>
            <p class="card-text">Jenis:
                @switch($koleksi->jenisKoleksi)
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
            </p>
            <p class="card-text">Tahun Terbit: {{ $koleksi->tahunTerbit }}</p>
            <p class="card-text">Jumlah Stock: {{ $koleksi->jumlahKoleksi }}</p>

            <a href="/koleksi" class="btn btn-primary">Back to Collection list</a>
        </div>
    </div>
@endsection
