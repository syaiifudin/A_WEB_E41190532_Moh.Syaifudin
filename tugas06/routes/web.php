<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkage;

Route::get('admin/profile', function () {
    //
})->middleware(CheckAge::class);

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
    //    
})->middleware('web');

Route::group('middleware' =>['web']), function () {
    //
});

Route::middleware(['web', 'subscribed'])->group(function() {
    //
})


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/profile', function () {
    //
})->middleware('auth');


Route::get('/', function () {
    //
})->middleware('first', 'second');
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
