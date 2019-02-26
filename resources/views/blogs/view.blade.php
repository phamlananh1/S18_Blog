@extends('home')
@section('title', 'My Blog')
@section('content')

    <a class="navbar-brand">My Blog</a>
    <p>
        <a href="{{route('blogs.index')}}" class="btn btn-default">Return to posts</a>
    </p>

    <h1>{{ $blogs->title }}</h1>
    <p>{{ $blogs->created }}</p>
    <p>{{ $blogs->teaser }}</p>
    <p>{{ $blogs->content }}</p>

@endsection
