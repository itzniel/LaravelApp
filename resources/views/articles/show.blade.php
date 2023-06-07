@extends('master')
@section('', 'article')
@section('content')
    <h1>Article #{{$article->id}}</h1>
    <p> {{ $article->name }}</p>
    <p> {{ $article->body }}</p>
    <p> {{ $article->author_id }}</p> <br>
@endsection
