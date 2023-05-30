<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

route::get('article', [ArticleController::class, 'index'])->name('article.index');
