@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts._form')

        <button type="submit" class="btn btn-primary btn-block my-2">Create!</button>
    </form>
@endsection