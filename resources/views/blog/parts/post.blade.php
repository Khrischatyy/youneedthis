@extends('blog.index')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <main class="container">
        <section>
            {!! $post->text !!}
        </section>
    </main>
@endsection
