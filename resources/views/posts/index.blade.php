@extends('layouts.app')
@section('content')
    <h2>Elenco Post</h2>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@foreach($posts as $post)
    <div>
        <h4>Titolo: {{ $post->title }}</h4>
        <p>Post: {{ $post->body }}</p>
    </div>
@endforeach

@endsection
