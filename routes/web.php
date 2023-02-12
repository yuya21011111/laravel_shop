<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\ItemController;


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
    return view('user.welcome');
});

// こちらが優先される
Route::middleware('auth:users')->group(function(){
    Route::get('/user', [ItemController::class,'index'])->name('items.index');
    Route::get('show/{item}',[ItemController::class, 'show'])->name('items.show');
});

// dashboardを表示
// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth:users'])->name('dashboard');



require __DIR__.'/auth.php';
