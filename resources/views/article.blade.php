<article class="post">

    <header>
        <h2 class="title">
            <a href="">
                {{ $post->title }}
            </a>
        </h2>
    </header>

    <div class="content">
        {!! nl2br($post->text) !!}
    </div>

    <footer class="meta">
        <a href="" class="author">
            @<strong>{{ $post->user->name }}</strong>
        </a>
        <a href="" class="comments">
            {{ $post->comments->count() }} <strong>{{ str_plural('comment', $post->comments->count()) }}</strong>
        </a>
    </footer>

</article>
