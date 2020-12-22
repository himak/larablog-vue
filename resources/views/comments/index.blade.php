<section id="comments" class="section comments columns is-centered">
    <div class="is-size-5 column is-three-quarters">

        @auth
            @include('comments.create')
        @endauth

        <comment></comment>

{{--        <ol class="comment-list">--}}
{{--            @foreach($post->comments as $comment)--}}
{{--                <li>--}}
{{--                    @include('comments.show')--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ol>--}}

    </div>
</section>
