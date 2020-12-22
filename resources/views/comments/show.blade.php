<comment :comment-data="{{ $comment }}" inline-template>

    <article class="comment">

        <div
            ref="input"
            class="content"
            :contenteditable="editing"
            @input="textChanged"
            @keydown.enter="updateComment"
        >
            {{ $comment->text }}
        </div>

        <footer class="meta">

            <a href="/users/{{ $comment->user->id }}" class="author">
                @<strong>{{ $comment->user->name }}</strong>

            </a>

            <time datetime="{{ $comment->created_at->toW3cString() }}" class="has-text-grey">
                {{ $comment->created_at->diffForHumans() }}
            </time>

            @can('update', $comment)
                <span class="controls has-text-grey">
                    <a class="edit" @click="editing = true">edit</a>
                    <a class="delete" @click="deleteComment">x</a>
                </span>
            @endcan

        </footer>

    </article>

</comment>
