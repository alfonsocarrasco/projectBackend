<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\User\UserCreate;
use App\Http\Livewire\User\UserUpdate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
/*use App\Http\Livewire\User\Billing;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\User\Tables;
use App\Http\Livewire\User\StaticSignIn;
use App\Http\Livewire\User\StaticSignUp;
use App\Http\Livewire\User\Rtl;*/

use App\Http\Livewire\User\UserProfile;
use App\Http\Livewire\User\UserManagement;
//use App\Http\Livewire\User\VirtualReality;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

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
    return redirect('/login');
});

// Route Auth Google
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('socialConnect.GG');

Route::get('/google-auth/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();

    $fields = [
        'name' => $user->name,
        'email'=> $user->email,
        'google_id' => $user->id,
        'google_token' => $user->token,
        'google_avatar' => $user->avatar
    ];

    $user = User::updateOrcreate([
        'email' => $user->email,
    ], $fields);

    Auth::login($user);
    return redirect('/');

});

// Route Auth Facebook
Route::get('/facebook-auth/redirect', function (){
    return Socialite::driver('facebook')->redirect();
})->name('socialConnect.FB');

Route::get('/facebook-auth/callback', function() {
    $user = Socialite::driver('facebook')->stateless()->user();

    $fields = [
        'name' => $user->name,
        'email'=> $user->email,
        'facebook_id' => $user->id,
        'facebook_token' => $user->token,
        'facebook_avatar' => $user->avatar
    ];

    $user = User::updateOrcreate([
        'email' => $user->email,
    ], $fields);


    Auth::login($user);
    return redirect('/');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');

   // Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
   //  Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    //Route::get('/billing', Billing::class)->name('billing');
    //Route::get('/profile', Profile::class)->name('profile');
    //Route::get('/tables', Tables::class)->name('tables');
    //Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    //Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    //Route::get('/rtl', Rtl::class)->name('rtl');
    //Route::get('/virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
    Route::get('/user-update/{userId}', UserUpdate::class)->name('user-update');
    Route::get('/user-add', UserCreate::class)->name('user-add');
    Route::get('/user-delete/{userId}', function ($userId) {
        $user = User::where('id', $userId)->first();

        if ($user) {
            $user->delete();
            return redirect()->route('user-management')->with('status', 'User deleted successfully.');
        } else {
            return redirect()->route('user-management')->with('error', 'User not found.');
        }
    })->name('user-delete');
    Route::get('/user-management', UserManagement::class)->name('user-management');
});
