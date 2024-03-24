<?php


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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('produits')->group(
    function () {
        Route::get('/', [ProduitController::class, 'index'])->name('produits.index');
        Route::get('/{id}', [ProduitController::class, 'show'])->name('produits.show');
    }
);


Route::fallback([HomeController::class, 'P404']);
