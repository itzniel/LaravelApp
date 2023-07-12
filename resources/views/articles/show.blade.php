@extends('master')
@section('', 'article')
@section('body')
    <h1>Article #{{$article->id}}</h1>
    <p> {{ $article->name }}</p>
    <p> {{ $article->body }}</p>
    <p> {{ $article->author_id }}</p> <br>
    <h1>Belongs To</h1>
    Category Name: {{$article->category->name}} <br>
    Category Description: {{$article->category->description}}<br>
@endsection
