@extends('master')
@section('', 'categories')
@section('content')
    <h1>Category</h1>
    <h1>ID: {{$category->id}}</h1>
    <p> {{ $category->name }}</p>
    <p> {{ $category->description }}</p>

    <h1>Articles:</h1>
    @foreach($category->articles as $article)
        <p>ID: {{ $article->id }}</p>
        <p>Name: {{ $article->name }}</p>
        <p>Body: {{ $article->body }}</p>
        <p>Author ID: {{ $article->author_id }}</p> <br>
    @endforeach


@endsection
