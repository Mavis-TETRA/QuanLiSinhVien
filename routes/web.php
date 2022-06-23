<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SinhvienController;

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
    return view('auth.login');
});

// Route::get('/detail', function () {
//     return view('detail');
// });


Route::get('/dashboard',[SinhvienController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/add',[SinhvienController::class, 'create'])->middleware(['auth'])->name('add');


Route::group(['middleware' => 'auth'], function() {
    Route::resource('/sinhvien', SinhvienController::class);
  });

  Route::group(['middleware' => 'auth'], function() {
    Route::resource('/user', UserController::class);
  });

// Route::resource('sinhvien', SinhvienController::class)-> middleware(['auth']);

Route::get('/detail/{id}',[SinhvienController::class, 'show'])->middleware(['auth']);

// Route::post('edit',[SinhvienController::class, 'edit'])->middleware(['auth'])->name('edit');

// Route::post('dashboard',[SinhvienController::class, 'destroy'])->middleware(['auth'])->name('destroy');

// Route::get('/destroy/{id}',[SinhvienController::class, 'destroy'])->middleware(['auth']);


// Route::get('/add', function () {
//     return view('add');
// })->middleware(['auth'])->name('add');

Route::get('/controller-account',[UserController::class, 'index'])->middleware(['auth'])->name('controller-account');

// Route::get('/controller-account', function () {
//     return view('controller-account');
// })->middleware(['auth'])->name('controller-account');

Route::get('/my-account', function () {
    return view('myaccount');
})->middleware(['auth'])->name('myaccount');

require __DIR__.'/auth.php';


Route::resource('/quanlytaikhoan', UserController::class);
