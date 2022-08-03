@extends('blog.index')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container">
        <article class="d-flex flex-wrap">
            @foreach($posts as $post)
                @include('blog.components.card', ['post' => $post])
            @endforeach
        </article>
    </div>
@endsection
