@extends('layouts.master')

@section('content')

    <h1 class="display-4">{{ $title }}</h1>

    @foreach($posts as $post)
        <p>{{ $post }}</p>
    @endforeach

@endsection

@section('sidebar')
    <p>This is sidebar</p>
@endsection
