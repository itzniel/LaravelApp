@extends('master')

@section('body')
    <h1>Deleted Categories</h1>

    @foreach ($categories as $category)
        Category ID: {{ $category->id }}<br>
        Name: {{ $category->name }}<br>
        Description: {{ $category->description }}<br>
        <a href="{{ route('categories.restore',
                        $category->id) }}">
            [Restore]</a><br>
        <a href="{{ route('categories.forcedelete',
                        $category->id) }}">
            [Force Delete]</a><br>
        <br>
    @endforeach
@endsection

