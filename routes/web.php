<?php

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

use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginRegistration;




Route::get('/consulting', [ConsultingController::class, 'displayPsychologistPage'])->middleware('auth');
Route::get('/consulting/search', [ConsultingController::class, 'searchPsychologist'])->middleware('auth');
Route::get('/consulting/detail/{id}', [ConsultingController::class, 'displaySelectedPsychologist'])->middleware('auth');
Route::get('/consulting/{id}', [ConsultingController::class, 'displayPsychologist'])->middleware('auth');





Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

// Route::get('/consulting', function () {
//     return view('consulting');
// });

Route::get('/consulting-2', function () {
    return view('consulting-2');
});

Route::get('/consulting-3', function () {
    return view('consulting-3');
});

Route::get('/consulting-4', function () {
    return view('consulting-4');
});

Route::get('/consulting-5', function () {
    return view('consulting-5');
});

// Route::get('/journaling', function () {
//     return view('journaling');
// });

Route::get('/journaling-2', function () {
    return view('journaling-2');
});

// Route::get('/meditation', function () {
//     return view('meditation');
// });

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register','RegistrationController@store');

Route::post('/login', 'LoginRegistration@authenticate');

Route::get('/logout', 'LoginRegistration@logout');
