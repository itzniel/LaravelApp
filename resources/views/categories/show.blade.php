@extends('master')
@section('', 'categories')
@section('content')
    <h1>Article #{{$category->id}}</h1>
    <p> {{ $category->name }}</p>
    <p> {{ $category->description }}</p>

@endsection
