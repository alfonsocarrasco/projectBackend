<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route Auth Google
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();

    // Find User register via email
    $user_find = User::where('email',$user->email)->get()->first();

    $fields = ['name' => $user->name, 'email'=> $user->email, 'google_id' => $user->id];

    $user = User::updateOrcreate([
        'email' => $user->email,
    ], $fields);

    Auth::login($user);
    return redirect('/');

});

// Route Auth Facebook
Route::get('/facebook-auth/redirect', function (){
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook-auth/callback', function() {
    $user = Socialite::driver('facebook')->stateless()->user();

    // Find User register via email
    $user_find = User::where('email',$user->email)->get()->first();

    $fields = ['name' => $user->name, 'email'=> $user->email, 'facebook_id' => $user->id];

    $user = User::updateOrcreate([
        'email' => $user->email,
    ], $fields);

    Auth::login($user);
    return redirect('/');
});
