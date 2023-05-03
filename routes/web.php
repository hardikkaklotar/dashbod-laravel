<?php

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

/* super-admin route */

Route::get('super-admin/seminars', function (){
    return view('super-admin.seminars');
})->name('super-admin.seminars');

Route::get('super-admin/classes', function (){
    return view('super-admin.classes');
})->name('super-admin.classes');

Route::get('super-admin/classes-pdf', function (){
    return view('super-admin.classes-pdf');
})->name('super-admin.classes-pdf');

Route::get('super-admin/service', function (){
    return view('super-admin.service');
})->name('super-admin.service');

Route::get('super-admin/teachar', function (){
    return view('super-admin.teachar');
})->name('super-admin.teachar');

Route::get('super-admin/reporting', function (){
    return view('super-admin.reporting');
})->name('super-admin.reporting');

/* seminars route */



Route::get('partials/profile', function () {
    return view('partials/profile');
})->name('partials.profile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('super-admin/home', function () {
        return view('super-admin/home');
    })->name('home');

    Route::get('seminar/home', function () {
        return view('seminar/home');
    })->name('home');

    Route::get('seminar/exams', function () {
        return view('seminar/exams');
    })->name('exams');

    Route::get('seminar/modules', function () {
        return view('seminar/modules');
    })->name('modules');

    Route::get('seminar/seminars', function () {
        return view('seminar/seminars');
    })->name('seminars');

    Route::get('partials/profile', function () {
        return view('partials/profile');
    })->name('profile');
});
