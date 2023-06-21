@extends('master')
@section('', 'category')
@section('content')
   <h1>All Categories</h1>
    @foreach($articles as $article)
        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Name: {{ $category->name }}</p>
            <p>Description: {{ $category->description }}</p>


    @endforeach
@endsection
