@extends('master')
@section('', 'categories')
@section('body')
   <h1>All Categories</h1>
    @foreach($categories as $category)
        <div>
            <p>ID: {{ $category->id }}</p>
            <p>Name: <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></p>
            <p>Description: {{ $category->description }}</p>
            <p><a href="{{ route('categories.edit', $category->id) }}">Edit</a></p>
            <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
    @endforeach

@endsection
