<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', function(){
    return 'frontend goto admin: <a href="'.route('login').'">Admin</a>';

})->name('index');

Auth::routes([
    'register'=>false,
    'verify'=>false,
    'reset'=>false
]);
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::name('admin.')->group(function(){ /* admin prefix name */        
        Route::prefix('admin')->group(function(){ /* admin prefix url */
            /* DASHBOARD */
            Route::get('dashboard', 'DashboardController@index')->name('dashboard');
            
        });
    });
});
