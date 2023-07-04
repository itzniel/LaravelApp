@extends('master')
@section('', 'category')
@section('content')
   <h1>All Categories</h1>
    @foreach($articles as $article)
        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Name: <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></p>
            <p>Description: {{ $category->description }}</p>

            <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>

    @endforeach
@endsection
