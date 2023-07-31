<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MicropostController;
use App\Http\Controllers\UserFollowController;
use App\Http\Controllers\LikeController;

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

Route::get('/', [MicropostController::class, 'index']);

Route::get('/dashboard', [MicropostController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {
    Route::group(["prefix"=>"user/{id}"], function () {
        Route::post('follow', [UserFollowController::class, "store"])->name("user.follow");
        Route::delete('unfollow', [UserFollowController::class, "destroy"])->name("user.unfollow");
        Route::get('followings', [UsersController::class, "followings"])->name("users.followings");
        Route::get('followers', [UsersController::class, "followers"])->name("users.followers");
        Route::get('favorites', [UsersController::class, 'favorites'])->name('users.favorites');
    });

    Route::resource('users', UsersController::class, ['only' => ['index', 'show']]);
    Route::resource('microposts', MicropostController::class, ['only' => ['store', 'destroy']]);

    Route::group(['prefix' => 'microposts/{id}'], function () {
        Route::post('like', [LikeController::class, 'store'])->name('users.like');
        Route::delete('unlike', [LikeController::class, 'destroy'])->name('users.unlike');
    });
});
