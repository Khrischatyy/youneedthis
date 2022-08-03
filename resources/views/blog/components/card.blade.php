<div class="col-md-4">
    <a href="{{ route('post', ['id' => $post->id]) }}">
        <div class="name">
            {{ $post->title }}
        </div>
        <div class="post-image">
            <img src="{{ $post->image }}" alt="post">
        </div>
    </a>
</div>
