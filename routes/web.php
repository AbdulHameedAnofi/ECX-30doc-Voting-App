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
    return view('home');
});

// Route::view('homes', 'home');
//For adding an candidate
Route::get('addcandidate',[Candidates::class,'addCandidate']);

//For storing an candidate
Route::post('storeData',[Candidates::class,'storeCandidate']);

//vote candidate
Route::get('voteCandidate',[Candidates::class,'voteCandidate']);

//For showing an candidate
Route::get('/',[Candidates::class,'viewCandidate'])->name('home');

//show one candidate
Route::get('getCandidate',[Candidates::class,'getCandidate']);

//show leader board
Route::get('leaderboard',[Candidates::class,'leaderBoard']);

Route::view('voted', 'voted');