<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TopController;
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

Route::get('/', [TopController::class, 'index'])
    ->name('top');

Route::get('/news', [TopController::class, 'news'])
    ->name('news.index');

Route::get('/news/{news}', [TopController::class, 'newsDetail'])
    ->name('news.detail');

Route::get('/price', [TopController::class, 'price'])
    ->name('price.index');

Route::get('/admin/feature', [FeatureController::class, 'index'])
    ->middleware(['auth', 'verified', 'basicauth'])
    ->name('admin.feature.index');

Route::resource('/admin/news', NewsController::class)
    ->middleware(['auth', 'verified', 'basicauth'])
    ->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'show' => 'admin.news.show',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'destroy' => 'admin.news.destroy',
    ]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
