<?php

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        "title" => "HOME",
        "active" =>"HOME"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" =>"ABOUT",
        "active" =>"ABOUT",
        "name"  => "Choirul Anam",
        "email" => "choirulanam@kodingworks.io",
        "image" => "anm.jpg" 
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        "active" =>'Categories',
        'categories' => Category::all()
    ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');











// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         "active" =>'Categories',
//         'posts' => $category->posts->load('category', 'user')
//     ]);
// });



// Route::get('/author/{user:username}', function(User $user) {
//     return view('posts', [
//     'title' => "Post By Author : $user->name",
//     "active" => "post",
//     'posts' => $user->posts->load('category', 'user'),
//     ]);
// });


Route::get('/coba', 'App\Http\Controllers\CobaController@index');