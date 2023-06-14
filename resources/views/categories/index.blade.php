@extends('master')
@section('', 'categories')
@section('content')
   <h1>All Categories</h1>
    @foreach($categories as $category)
        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Name: {{ $category->name }}</p>
            <p>Description: {{ $category->description }}</p>
        </div>
    @endforeach

@endsection
