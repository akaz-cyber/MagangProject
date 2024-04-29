<?php

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\DashboardPostControllerr;

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
    return view('home',[
        "title" => "Home"
    ]);

});
Route::get('/about', function () {
    return view('about', [
         "name" => "ajri sidik",
         "email" => "ajri@gmail.com",
         "title" => "About"
    ]
);
});


Route::get('/contact', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('contact',[
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','user'),
        // 'category' => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentificate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/authors/{user:username}', function(User $user){
    //     return view('contact',[
        //         'title' => "Post By Author : $user->name" ,
        //         'posts' => $user->posts->load('category','user'),
        //     ]);
        // });
Route::get('/dashboard',function(){
return view('dashboard.dashboardpost');
})->middleware('auth');


Route::get('/dashboard/pots{{post:slug}}', [DashboardPostControllerr::class, 'show']);
Route::get('/dashboard/posts/checkSlug', [DashboardPostControllerr::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts',
 DashboardPostControllerr::class)->middleware('auth');
