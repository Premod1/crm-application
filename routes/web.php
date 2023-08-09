<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ProjectController as UserProjectController;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::get('/add-client', [ClientController::class, 'create'])->name('add-client');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/{id}/update', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/{id}/delete', [ClientController::class, 'delete'])->name('client.delete');

    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/add-project', [ProjectController::class, 'create'])->name('add-project');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');

    Route::get('/user', [UserController::class, 'index'])->name('user');
    // Route::get('/add-user', [UserController::class, 'create'])->name('add-user');
    // Route::post('/user/store', [UserController::class,'store'])->name('user.store');
});
