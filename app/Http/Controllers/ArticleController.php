<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CategoryRequest;
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
    public function edit($article){
        $article = Article::findOrFail($article);
        return view ('articles.edit', compact("article"));
    }
    public function update(ArticleRequest $request, $article){
        $formData = $request->all();
        $article = Article::findOrFail($article);
        $article->update($formData);

        return redirect('articles');
    }
    public function destroy(Article $article) {
        $article->delete();
        return redirect('articles');
    }

}
