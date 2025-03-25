<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
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

//Route::get('/response', function () {
//    return view('atompay');
//});

Route::get('/pay', [PayController::class, 'index']);
Route::post('/response', [PayController::class, 'response']);
