<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about-us');
})->middleware(['auth', 'verified'])->name('about');
/*
Route::get('/catalog', function () {
    return view('catalog-page');
})->middleware(['auth', 'verified'])->name('catalog');
*/
Route::get('/contact', function () {
    return view('contact-us');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/product-individual', function () {
    return view('product-page');
})->middleware(['auth', 'verified'])->name('product-individual');

Route::post('/analysis', [ProductController::class, 'analysis'])->name('comments.analysis');

Route::get('/passwords', [ProductController::class, 'passwords'])->name('generate.passwords');



Route::middleware(['auth'])->group(function () {
    Route::get('/cities/{country}', [ProductController::class, 'cities'])->name('cities');
    Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');
    Route::post('/comments', [ProductController::class, 'comments'])->name('comments.store');
    Route::resource('products', ProductController::class);
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');
