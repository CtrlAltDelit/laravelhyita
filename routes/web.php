<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/calculator', function () {
    return view('Calculator');
})->name('calculator');

 
Route::get('/uslugi', function () {
    return view('uslugi');
})->name('uslugi');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
 
 
 
   

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    
    
    
    
    
    

    Route::post(
        '/order/submit', 
        'App\Http\Controllers\ContactController@submit'
    )->name('order-form');

    Route::get('/order', function () {
        return view('order');
    })->name('order');


    Route::get(
        '/order/all', 
        'App\Http\Controllers\ContactController@allData'
    )->name('order-data');


    Route::get(
        '/order/all/{id}', 
        'App\Http\Controllers\ContactController@showOneMessage'
    )->name('order-data-one');








    Route::group(['middleware' => ['role:admin']], function () {
        


        Route::get('/admin', function () {
            return view('admin');
        })->name('admin');
        
        Route::get(
            '/admin/all', 
            'App\Http\Controllers\AdminController@allData'
        )->name('admin-data');
    
    
        Route::get(
            '/admin/all/{id}', 
            'App\Http\Controllers\AdminController@showOneMessage'
        )->name('admin-data-one');

        Route::post(
            '/admin/{id}/update',
            'App\Http\Controllers\AdminController@updateMessageSubmit'
            )->name('admin-update-submit');
    
    
    Route::get(
            '/admin/{id}/update',
            'App\Http\Controllers\AdminController@updateMessage'
            )->name('admin-update');
    });
    
});

require __DIR__.'/auth.php';
