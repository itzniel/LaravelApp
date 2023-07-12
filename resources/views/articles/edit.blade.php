@extends('master')


@section('body')
    <h1>Edit Article Form</h1>

    <form method="POST" action="
        {{ route('articles.update', $article->id) }}">
        @method('PATCH')
        @csrf
        <label for="name">Name:</label>
        <input name="name" type="text"
               value="{{ $article->name }}"><br>
        <label for="body">Description:</label>
        <input name="body" type="text"
               value="{{$article->body}}"><br>
        <label for="author_id">Author ID:</label>
        <input name="author_id" type="text"
               value="{{$article->author_id}}"><br>
        <input type="submit" value="Update"><br>
    </form>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif
@endsection

