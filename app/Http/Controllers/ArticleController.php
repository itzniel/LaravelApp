<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Category;
class ArticleController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->get();

        return view('articles.index', compact("articles"));
}
    public  function show(Article $article){

        return view('articles.show', compact("article"));
    }
    public function create(){
        $categories = Category::all();
        return view ('articles.create', compact("categories"));
    }

    public function store(Request $request) {
        $category = Category::findOrFail($request->category_id);
        $article = new Article($request->all());
        $article->author_id = 1;
        $article->category()->associate($category)->save();
        return redirect('articles');
    }
    public function destroy(Article $article) {
        $article->delete();
        return redirect('articles');
    }

}
