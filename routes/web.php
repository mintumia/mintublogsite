<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;

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
//Route::get('user',[AuthenticateController::class,'index']);

Route::resource('user',AuthenticateController::class);

Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('testmain',[AuthenticateController::class,'testmain']);
