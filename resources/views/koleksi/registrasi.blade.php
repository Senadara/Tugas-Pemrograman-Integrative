@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <h1>Add Collection</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form class="row g-3" method="POST" action="/koleksiStore">
            @csrf
            <div class="col-12">
                <label for="namaKoleksi" class="form-label">Nama</label>
                <input type="text" class="form-control" id="namaKoleksi" name="namaKoleksi" placeholder="">
            </div>
            <div class="col-12">
                <label for="jenisKoleksi">Jenis Koleksi</label>
                <select class="form-select" aria-label="Default select example" id="jenisKoleksi" name="jenisKoleksi">
                    <option selected>Open this select menu</option>
                    <option value="1">Buku</option>
                    <option value="2">Majalah</option>
                    <option value="3">Cakram Digital</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="jumlahKoleksi" class="form-label">Jumlah Koleksi</label>
                <input type="number" class="form-control" id="jumlahKoleksi" name="jumlahKoleksi" placeholder="...">
            </div>
            <div class="col-md-6">
                <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
                <input type="date" class="form-control" id="tahunTerbit" name="tahunTerbit" placeholder="1999">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
@endsection
