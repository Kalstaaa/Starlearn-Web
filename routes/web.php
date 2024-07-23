<?php

use Illuminate\Support\Facades\Route;



// User :
use App\Http\Controllers\User\DashboardUser;
use App\Http\Controllers\User\DetailBookController;
use App\Http\Controllers\User\PopularBookController;
use App\Http\Controllers\User\ForYouController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\loginUserController;

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


// User :
Route::get('/dashboard', [DashboardUser::class, 'DashboardPage'])->name('dashboard');
Route::get('/dashboard/detailbook', [DetailBookController::class, 'DetailBookPage'])->name('detailbook');
