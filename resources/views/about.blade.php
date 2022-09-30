@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
        <div class="col">
            <h2>Nama : {{ $name }}</h2>
            <h5>Email : {{ $email }}</h5>
            <h5>Alamat : {{ $address }}</h5>
            <img src="img/elang.jpg" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
        </div>
        </div>
    </div>    
@endsection