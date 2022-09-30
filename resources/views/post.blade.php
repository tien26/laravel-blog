@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($blog->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $blog[0]->category->name }}" class="card-img-top"
                alt="{{ $blog[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $blog[0]->slug }}" class="text-dark">{{ $blog[0]->title }}</a></h3>

                <p><small class="text-muted">By : <a
                            href="/blog?author={{ $blog[0]->author->username }}">{{ $blog[0]->author->name }}</a> in <a
                            href="/blog?category={{ $blog[0]->category->slug }}">{{ $blog[0]->category->name }}</a>
                        {{ $blog[0]->created_at->diffForHumans() }} </small></p>

                <p class="card-text">{{ $blog[0]->excerpt }}</p>

                <a href="/blog/{{ $blog[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($blog->skip(1) as $b)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/blog?category={{ $b->category->slug }}"
                                    class="text-white">{{ $b->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $b->category->name }}" class="card-img-top"
                                alt="{{ $b->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/blog/{{ $b->slug }}">{{ $b->title }}</a></h5>
                                <p><small class="text-muted">By : <a
                                            href="/blog?author={{ $b->author->username }}">{{ $b->author->name }}</a>
                                        {{ $b->created_at->diffForHumans() }} </small></p>
                                <p class="card-text">{{ $b->excerpt }}</p>
                                <a href="/blog/{{ $b->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">Not Post Found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $blog->links() }}
    </div>


@endsection
