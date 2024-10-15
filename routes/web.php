<?php

use App\Http\Controllers\Qurancontroller;
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




// Quran  =========================================================================
//  nama webnya||
Route::get('/quran',[Qurancontroller::class, 'index']);

Route::get('/quran/{id}',[Qurancontroller::class, 'indexid']);

