@extends('master')
@section('', 'categories')
@section('body')
    <h1>New Category Form</h1>
   <form method="POST" action="{{ action([\App\Http\Controllers\CategoryController::class, 'store'])}}">
       {{ csrf_field() }}
       <label for="name">Name:</label>
       <input name="name" type="text"><br>
       <label for="description">Description:</label>
       <input name="description" type="text"><br>
       <input type="submit" value="Submit"><br>
   </form>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif


@endsection
