<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tweet',App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::middleware('auth')->group(function() {
    
    Route::get('/tweet/update/{tweetId}',App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index');
    Route::put('tweet/update/{tweetId}',App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put');
    Route::post('/tweet',App\Http\Controllers\Tweet\CreteController::class)->name('tweet.create');
    Route::delete('tweet/delete/{tweetId}',App\Http\Controllers\Tweet\DeleteController::class)->name('tweet.delete')->where('tweetId','[0-9]+');
    Route::post('ajax/show_all',App\Http\Controllers\Tweet\AjaxController::class);
});

require __DIR__.'/auth.php';
