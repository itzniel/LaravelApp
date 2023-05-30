<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
       $testing = "Passing Data";
        return view('articles.index', compact("testing"));
}
}
