@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-center">
    <h1>Add User</h1>
</div>
<div class="d-flex justify-content-center">
    <form class="row g-3" method="POST" action="/userStore">
        @csrf
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-12">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Adam">
        </div>
        <div class="col-12">
            <label for="telp" class="form-label">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp" placeholder="081234567890">
        </div>
        <div class="col-12">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection

