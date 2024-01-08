<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



//  Route for login user
Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('login',[AdminController::class,'login']);

//  Added auth middleware so that only login user can access inside it

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[AdminController::class,'logout']);
    Route::get('home',[AdminController::class,'dashboard']);
});

