<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Process\Exceptions\ProcessTimedOutException;
use Illuminate\Support\Facades\DB;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use PHPUnit\Framework\Attributes\PostCondition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) { # Category::where('slug', $category)->first()
    return view('posts', [
        // 'posts' => $category->posts->load(['category', 'author']), # eagar load relationships on an existing model
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all(),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) { 
    return view('posts', [
        'posts' => $author->posts,
    ]);
});