<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeatureController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/top', function () {
    return Inertia::render('Template/Top');
})->name('top');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/feature', [FeatureController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('feature');

Route::get('/admin/news', [NewsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('news');

Route::get('/admin/news/create', [NewsController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('news.create');

Route::get('/admin/news/{news}/edit', [NewsController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('news.edit');

Route::delete('/news/{news}', [NewsController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('news.delete');

Route::get('/admin/newsDetail', function () {
    return Inertia::render('News/Detail');
})->middleware(['auth', 'verified'])->name('news.detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
