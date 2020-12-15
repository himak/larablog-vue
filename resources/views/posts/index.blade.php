@extends('layouts.master')

@section('content')

    <ol class="posts">
        @foreach($posts as $post)
            @include('posts.article', ['type' => 'listing'])
        @endforeach

{{--        short of foreach with include view--}}
{{--        @each('posts.article', $posts, 'post')--}}
    </ol>

@endsection
