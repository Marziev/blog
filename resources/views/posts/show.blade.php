@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <p>Added {{ $post->created_at->diffForHumans() }}</p>

    @if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5 )
        <strong>New!</strong>
    @endif
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">
        Edit
    </a>
@endsection('content')