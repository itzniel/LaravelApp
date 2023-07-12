<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Models\Category;
    use App\Http\Requests\CategoryRequest;
    use App\Http\Controllers\ArticleController;


class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit', 'delete']]);
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact("categories"));

    }

    public function show($category)
    {
        $category = Category::find($category);
        return view('categories.show', compact("category"));
    }

    public function create(){

        return view ('categories.create');
    }

    public function store(CategoryRequest $request) {
        $formData = $request->all();

        Category::create($formData);

        return redirect('categories');

    }

    public function edit($category){
        $category = Category::findOrFail($category);
        return view ('categories.edit', compact("category"));
    }
    public function update(CategoryRequest $request, $category){
        $formData = $request->all();
        $category = Category::findOrFail($category);
        $category->update($formData);

        return redirect('categories');
    }


    public function manage() {
        $categories = Category::withTrashed()->get();
        return view('categories.manage', compact("categories"));
    }
    public function destroy(Category $category) {
        $category->articles()->delete();
        $category->delete();
        return redirect('categories');
    }
    public function restore($category) {
        Category::withTrashed()->where('id', $category)->restore();
        Category::findOrFail($category)
            ->articles()
            ->restore();

        return redirect('categories');
    }

    public function forceDelete($category) {
        Category::onlyTrashed()->where('id', $category)->forceDelete();
        return redirect('categories');
    }


}
