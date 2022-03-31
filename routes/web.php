<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/student', 'Admin\StudentController@index')->name('admin.student');
    Route::get('/student/data', 'Admin\StudentController@getDescription')->name('admin.student.detail');

    Route::get('/about', function () {
        return 'admin about';
    });

    Route::get('/info', function () {
        return 'admin info';
    });

    Route::get('/contact', function () {
        return 'admin contact';
    });
});

