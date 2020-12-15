<li>

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->text }}</p>

    <small class="is-size-6">
        {{ $post->user->name }}
    </small>

    @foreach($post->comments as $comments)
        <br>
        <em class="is-size-7">{{ $comments->text }}</em>
    @endforeach

</li>
