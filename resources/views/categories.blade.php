@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            @foreach ($categories as $c)
                <div class="col-md-4 mb-3">
                    <a href="/categories/{{ $c->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('img/default.jpg') }}" class="card-img" alt="{{ $c->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">{{ $c->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
