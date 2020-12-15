@extends('layouts.master')

@section('content')

    @include('posts.article', [ 'type' => 'full'])

    @include('comments.index')

@endsection
