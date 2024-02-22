<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route Auth Google
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
   $user = Socialite::driver('google')->user();
    dd($user);
});

// Route Auth Facebook
Route::get('/facebook-auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook-auth/callback', function(){
    $user = Socialite::driver('facebook')->user();
    dd($user);
});
