<?php

use App\Http\Controllers\Candidates;
use Illuminate\Support\Facades\Route;

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

// Route::view('homes', 'home');
//For adding an image
Route::get('addcandidate',[Candidates::class,'addCandidate'])->name('images.add');

//For storing an image
Route::post('storeData',[Candidates::class,'storeCandidate']);

//For showing an image
Route::get('homes',[Candidates::class,'viewCandidate'])->name('home');