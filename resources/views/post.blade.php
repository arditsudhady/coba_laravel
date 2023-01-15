@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>

                <p>By. <a href="/blog?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"  class="card-img-top">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200×200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                    
                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>

    
@endsection