@extends('master')
@section('', 'article')
@section('body')
   <h1>All Articles</h1>
   <a href="{{ route ('articles.create') }}">Create a New Article </a>
   <span class="navbar-text">
    Last posted article: {{ $lastPostedArticle }}<br>
</span>

   @foreach($articles as $article)
        <div>
            <p>ID: {{ $article->id }}</p>
            <p>Name: {{ $article->name }}</p>
            <p>Body: {{ $article->body }}</p>
            <p>Category ID: {{ $article->category_id }}</p>
            <p>Author ID: {{ $article->author_id }}</p>
            <br>
            <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        <br>
    @endforeach

@endsection
