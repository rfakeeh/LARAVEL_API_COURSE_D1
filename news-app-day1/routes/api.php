<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::resource('category', CategoryController::class);

Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::put('category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('open_document', [CategoryController::class, 'open_document'])->name('category.open_document');

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
