@extends('master')
@section('', 'article')
@section('content')
   <h1>All Articles</h1>
   <a href="{{ route ('articles.create') }}">Create a New Article </a>
    @foreach($articles as $article)
        <div>
            <p>ID: {{ $article->id }}</p>
            <p>Name: {{ $article->name }}</p>
            <p>Body: {{ $article->body }}</p>
            <p>Author ID: {{ $article->author_id }}</p> <br>
    @endforeach

@endsection
