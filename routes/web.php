<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact/', function () {
    return 'Uwaguosa Aluyi-Osa';
});

Route::get('about/', function () {
    return '<h1> Laravel makes it easy to develop websites</h1>';
});

Route::get('uid/{id}', function ($id) {
    return "ID: $id"; })->where('id', '[0-9]+'
);


Route::group(['as'     => 'users.',
              'prefix' => 'users',
                'where'  => ['id' => '[0-9]+','user' => '[A-Za-z\s]+' ]], function (){
            Route::get('{user?}', function($user='batman') {
                return 'Name : '.$user;
            })->name('show');

            Route::get('{user?}/images/{id?}', function ($user , $id) {
                return 'Name: ' . $user . ' Image: ' . $id;
            })->name('images.show');
});

Route::get('aboutme/', function () {
    $name = ['fullName'=> 'Uwaguosa Aluyi-Osa'];
    return view('pages/about')->with($name);
})->name('about.show');

Route::get('thingsiknow/', function () {
    $items = ['PHP', 'JavaScript', 'HTML', 'ASP','C++'];
    return view('pages/langs', compact("items"));
})->name('langs.show');

Route::get('contact/', function () {

    $email=  ['w0817788@gmail.ca'] ;
    return view('pages/contact', compact("email"));
})->name('contact.show');


//Articles routes

Route::resource('articles', ArticleController::class);
/*Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
*/
//Categories
Route::get('categories/manage', [CategoryController::class, 'manage'])->name('categories.manage');

Route::get('categories/{category}/forcedelete', [CategoryController::class, 'forcedelete'])->name('categories.forcedelete');

Route::get('categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');

Route::resource('categories', CategoryController::class);


/*Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::patch('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
*/




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
