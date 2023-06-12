<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Providers;
use App\MServiceContainer\MintuContainerInterface;
use App\MServiceContainer\MintuContainer;
use Illuminate\Support\Facades\Request;

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
//App()->bind("Mintu",MintuProvider::class);

Route::get('/', function () {

   // dd(app());

  return view('welcome');


});
//Route::get('user',[AuthenticateController::class,'index']);

Route::resource('user',AuthenticateController::class);

Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('testmain',[AuthenticateController::class,'testmain']);
Route::get('/container',function (MintuContainer $mintu){


    dump($mintu->getNum());


   // dd(app());
})->name('container');

