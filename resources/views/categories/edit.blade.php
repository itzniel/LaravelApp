@extends('master')


@section('body')
    <h1>Edit Category Form</h1>

    <form method="POST" action="
        {{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <label for="name">Name:</label>
        <input name="name" type="text"
               value="{{ $category->name }}"><br>
        <label for="description">Description:</label>
        <input name="description" type="text"
               value="{{$category->description}}"><br>
        <input type="submit" value="Update"><br>
    </form>

    @include('partials.displayErrors')
@endsection

