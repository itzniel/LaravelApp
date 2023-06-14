<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->get();

        return view('articles.index', compact("articles"));
}
    public  function show(Article $article){

        return view('articles.show', compact("article"));
    }
}
