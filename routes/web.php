<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth;

/*
|--------------------------------------------------------------------------
| Itinéraires Web
|--------------------------------------------------------------------------
|
|C'est ici que vous pouvez enregistrer des itinéraires Web pour votre application. Celles-ci
| les routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
| contient le groupe middleware "web". Créez maintenant quelque chose de génial !
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/about-us', [PagesController::class, 'about']);

Route::get('/articles', [ArticlesController::class, 'index']);

// Route::get('/article/{id}', [ArticlesController::class, 'show']);

// Route::get('/articles/{id}', [ArticlesController::class, 'show']);

Route::get('/article/{article}', [ArticlesController::class, 'show']);

Route::get('/form', [ArticlesController::class, 'create']);

Route::post('/articles/create', [ArticlesController::class, 'store']);

Route::get('/article/{article}/edit', [ArticlesController::class, 'edit']);

Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);

Route::delete('article/{article}/delete', [ArticlesController::class, 'delete']); 

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/login', [SessionsController::class, 'login'])->name('login');






