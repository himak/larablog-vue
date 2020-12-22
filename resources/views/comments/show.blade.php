<comment inline-template>

    <article class="comment">

        <div
            class="content"
            @dblclick="editing = true"
            @blur="updateComment"
            :contenteditable="editing"
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

            <span class="controls has-text-grey">
                <a class="edit" @click="editing = true">edit</a>
                <a class="delete">x</a>
            </span>

        </footer>

    </article>

</comment>
