<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackhomeController;
use App\Http\Controllers\BackblogController;
use App\Http\Controllers\BackcontactController;
use App\Http\Controllers\BackportfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Backoffice;
use App\Models\Backhome;
use App\Models\Backblog;
use App\Models\Backportfolio;
use App\Models\ContactArticle;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name("welcome");

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', function() {
    $contactarticles = ContactArticle::all();
    return view('pages.contact', compact('contactarticles'));
});

Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');

// Route Home
Route::get('/backoffice/home', [BackhomeController::class, 'index'])->name('backhome');
Route::post('/backoffice/postbackhome', [BackhomeController::class, 'store']);
Route::delete('/backhome/{id}/delete', [BackhomeController::class, "destroy"]);
Route::get('/backhome/{id}/show', [BackhomeController::class, 'show']);
Route::get('/backhome/{id}/edit', [BackhomeController::class, 'edit']);
Route::put('/backhome/{id}/update', [BackhomeController::class, 'update']);

// Route Blog
Route::get('/backoffice/blog', [BackblogController::class, 'index'])->name('backblog');
Route::post('/backoffice/postbackblog', [BackblogController::class, 'store']);
Route::delete("/backblog/{id}/delete", [BackblogController::class, "destroy"]);
Route::get('/backblog/{id}/show', [BackblogController::class, 'show']);
Route::get('/backblog/{id}/edit', [BackblogController::class, 'edit']);
Route::put('/backblog/{id}/update', [BackblogController::class, 'update']);

// Route Portfolio
Route::get('/backoffice/portfolio', [BackportfolioController::class, 'index'])->name('backportfolio');
Route::post('/backoffice/postbackportfolio', [BackportfolioController::class, 'store']);
Route::delete('/backportfolio/{id}/delete', [BackportfolioController::class, "destroy"]);
Route::get('/backportfolio/{id}/show', [BackportfolioController::class, 'show']);
Route::get('/backportfolio/{id}/edit', [BackportfolioController::class, 'edit']);
Route::put('/backportfolio/{id}/update', [BackportfolioController::class, 'update']);

// Route Contact (& Front Edit)
Route::get('/backoffice/contact', [BackcontactController::class, 'index'])->name('backcontact');
Route::get('/contactShow/{id}/edit', [BackcontactController::class, 'editt']);
Route::put('/contactShow/{id}/update', [BackcontactController::class, 'updatee']);


// Route Front Home Edit
Route::get('/homeShow/{id}/edit', [BackhomeController::class, 'editt']);
Route::put('/homeShow/{id}/update', [BackhomeController::class, 'updatee']);

// Route Front Blog Edit
Route::get('/blogShow/{id}/edit', [BackblogController::class, 'editt']);
Route::put('/blogShow/{id}/update', [BackblogController::class, 'updatee']);

// Route Front Portfolio Edit
Route::get('/portfolioShow/{id}/edit', [BackportfolioController::class, 'editt']);
Route::put('/portfolioShow/{id}/update', [BackportfolioController::class, 'updatee']);