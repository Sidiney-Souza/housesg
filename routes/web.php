<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoPageController;
use App\Http\Controllers\UserController;

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


Route::resource('/produtos', ProdutoPageController::class)->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::post('produto/search', [ProdutoController::class, 'search'])->name('produto.search');
Route::post('produtos/search', [ProdutoPageController::class, 'search'])->name('produtos.search');
Route::post('user/search', [UserController::class, 'search'])->name('user.search');


Route::resource('/produto', ProdutoController::class)->middleware(['auth', 'admin']);
Route::resource('/user', UserController::class)->middleware(['auth', 'admin']);


Route::get('admin', function(){
    return view('Admin.adminWelcome');
})->middleware(['auth', 'admin']);


Route::get('sem_permissao', function(){
    return view('sem_permissao');
})->name('sem_permissao');