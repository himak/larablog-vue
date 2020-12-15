@extends('layouts.master')

@section('content')

    <ol class="posts">
{{--        @foreach($posts as $post)--}}
{{--            @include('article')--}}
{{--        @endforeach--}}

{{--        short of foreach with include view--}}
        @each('article', $posts, 'post')
    </ol>

@endsection
