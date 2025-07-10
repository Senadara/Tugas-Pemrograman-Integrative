@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            Data User
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">No Telp: {{ $user->telp }}</p>
            <p class="card-text">Alamat: {{ $user->address }}</p>
            
            <a href="/user" class="btn btn-primary">Back to user list</a>
        </div>
    </div>
@endsection
