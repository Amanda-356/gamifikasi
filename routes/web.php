<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Guru\GuruIndex;
use App\Livewire\Guru\Level1;
use App\Livewire\Guru\Level2;
use App\Livewire\Guru\Level3;
use App\Livewire\Guru\Level4;
use App\Livewire\Guru\Level5;
use App\Livewire\Guru\Respondent;
use App\Livewire\HomePage;
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

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)
    ->name('login');
});


Route::middleware('auth')->group(function () {
    // Route::middleware(['role:murid'])->name('murid.')->group(function () {
        Route::get('home', HomePage::class)
        ->name('home');
    // });


    Route::get('logout', LogoutController::class)
    ->name('logout');
});


Route::prefix('guru')->name('guru.')->group(function () {
    Route::get('/', GuruIndex::class)->name("dashboard");

    Route::get('level1', Level1::class)->name('level1');

    Route::get('level2', Level2::class)->name('level2');

    Route::get('level3', Level3::class)->name('level3');

    Route::get('level4', Level4::class)->name('level4');

    Route::get('level5', Level5::class)->name('level5');

    Route::get('respondent', Respondent::class)->name('respondent');

    Route::get('logout', Level5::class)->name('logout');
});



