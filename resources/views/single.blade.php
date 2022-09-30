@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $blog->title }}</h2>
                <p>By : <a href="/blog?author={{ $blog->author->username }}">{{ $blog->author->name }}</a> in <a
                        href="/blog?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $blog->category->name }}" class="card-img-top"
                    alt="{{ $blog->category->name }}">
                <article class="my-3 fs-5">
                    {!! $blog->body !!}
                </article>
                <a href="/blog" class="d-block mt-3">Back To Post</a>
            </div>
        </div>
    </div>
@endsection
