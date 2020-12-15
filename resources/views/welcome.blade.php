@extends('layouts.master')

@section('content')


    <section class="columns is-centered">
        <div class="column is-three-fifths">
            <h1 class="title">
                {{ $title }}
            </h1>

            <ul class="posts">
                @foreach($posts as $post)
                    <li>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->text }}</p>

                        <small class="is-size-6">{{ $post->user->name }}</small>

                        @foreach($post->comments as $comments)
                            <br>
                            <em class="is-size-7">{{ $comments->text }}</em>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection

@section('sidebar')
    <p>This is sidebar</p>
@endsection
