<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Participant;

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
    $videos = DB::table('videos')->get();
    $news = DB::table('news')->get();
    return view('index', compact('videos','news'));
})->name('index');
Route::get('/registration', function () {
    return view('registration');
});

Route::post('/registration', 'RegistrationController@register')->name('register');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/all-video', function () {
    return view('all-video');
});

Route::get('/judges', function () {
    return view('judges');
});

Route::get('/participants', function () {
    $users = Participant::all();
    return view('participants', compact('users'));
});

Route::get('/participant/{participantId}', function ($participantId) {
    $user = Participant::find($participantId);
    return view('participant', compact('user'));
})->name('participant');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
