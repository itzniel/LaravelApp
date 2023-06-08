<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact("categories"));

    }
    public function show($category){
        $category = Category::find($category);
        return view ('categories.show', compact("category"));
    }
}
