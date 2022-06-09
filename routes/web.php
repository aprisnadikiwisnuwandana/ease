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
use App\Http\Controllers\JournalingController;
use App\Http\Controllers\MeditationController;





Route::get('/consulting', [ConsultingController::class, 'displayConsultingPage'])->middleware('auth');
Route::get('/consulting/search', [ConsultingController::class, 'searchPsychologist'])->middleware('auth');
Route::get('/consulting/detail/{id}', [ConsultingController::class, 'displaySelectedPsychologist'])->middleware('auth');
Route::get('/consulting/{id}', [ConsultingController::class, 'displayFormPage'])->middleware('auth');
Route::post('/consulting/payment/{id}', [ConsultingController::class, 'submitFormPage'])->middleware('auth');
Route::get('/consulting/payment/{id}', [ConsultingController::class, 'displayPaymentDetail'])->middleware('auth');
Route::post('/consulting/payment/proof/{id}', [ConsultingController::class, 'submitProofOfPayment'])->middleware('auth');
Route::get('/consulting/schedule/{id}', [ConsultingController::class, 'displaySchedulePage'])->middleware('auth');
Route::post('/consulting/schedule/{id}', [ConsultingController::class, 'submitSchedule'])->middleware('auth');
Route::get('/consulting/confirm/{id}', [ConsultingController::class, 'displayConfirmationPage'])->middleware('auth');
Route::post('/consulting/accept/{id}', [ConsultingController::class, 'acceptConsulting'])->middleware('auth');
Route::post('/consulting/decline/{id}', [ConsultingController::class, 'declineConsulting'])->middleware('auth');

Route::get('/journaling', [JournalingController::class, 'displayJournalingPage'])->middleware('auth');
Route::get('/journaling/search', [JournalingController::class, 'searchJournaling'])->middleware('auth');
Route::get('/journaling/write/{id}', [JournalingController::class, 'writeJournal'])->middleware('auth');
Route::post('/journaling/submit/{id}', [JournalingController::class, 'submitJournal'])->middleware('auth');
Route::post('/journaling/update/{id}', [JournalingController::class, 'updateJournal'])->middleware('auth');

Route::get('/meditation', [MeditationController::class, 'displayMeditationPage'])->middleware('auth');
Route::get('/meditation/search', [MeditationController::class, 'searchMeditation'])->middleware('auth');
Route::get('/meditation/sound/{id}', [MeditationController::class, 'displayMeditationSound'])->middleware('auth');






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
