<div >
    <ul>
        @foreach ($posts as $key=>$post)
        <div class="mb-6">
            <h1 class="text-xl">#{{ $post->id }} {{ $post->post_title }}</h1>
            <p>{{ $post->post_body }}</p>
        </div>
        @endforeach
    </ul>
    {{count($posts)}}
</div>
