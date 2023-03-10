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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => 'true']);

Route::group(['middleware' => 'verified'], function () {

    // Rutas a verificar

});

Route::get('community', [App\Http\Controllers\CommunityLinkController::class,
'index']);

Route::post('community', [App\Http\Controllers\CommunityLinkController::class,
'store']);
