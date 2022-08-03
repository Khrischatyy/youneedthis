@extends('blog.index')

@section('title')
    Categories
@endsection

@section('content')
    <main class="categories d-flex flex-column justify-content-center align-items-center">
        <nav class="nav-categories text-center d-flex flex-column">
            <a class="back" href="{{ url()->previous() }}">
                <img src="{{ asset('images/back.svg') }}" alt="back">
            </a>
            @foreach($categories as $category)
                <a href="{{ route('posts', ['category' => $category->title]) }}" class="text-lg">{{ $category->title }}</a>
            @endforeach
        </nav>
    </main>
@endsection
