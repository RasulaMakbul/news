<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AboutController;

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
    return view('welcome');
});
Route::get('/hello', function () {
    return 'hello world';
});
Route::get('/user/{id}/{name?}', function ($id,$name="Emran") {
    return 'Your id is: '.$id.' and your name is :'.$name;
})->where('id','[0-9]+');

Route::get('/world',[HelloController::class,'hello']);
Route::get('/Add' , [AddController::class,'index']);
Route::get('/About',[AboutController::class,'About','as'=>'About']);
//Route::view('/contact','contact');
