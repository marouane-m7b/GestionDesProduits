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
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index']);

Route::get('/{id}', [HomeController::class, 'showId'])
    ->name('home')->where('id', '^[0-9]+$');

// Route::get('/{id}', function ($id) {
//     $testId = $id;
//     return view('welcome', compact("testId") );
// });


// Route::any('/welcome/{nom}/test', function ($nom) {
//     return 'Welcome ' . $nom;
// })->name('welcome');

// Route::redirect('/redirect', '/', 302);

// Route::prefix('produits')->group(function () {
//     Route::get('/', function () {
//         return 'produits';
//     });

//     Route::get('/creer', function () {
//         return 'produits creation';
//     });

//     Route::get('/modifier', function () {
//         return 'produits modification';
//     });
// });

// Route::group(['prefix' => 'produits','name'=>'produit'], function () {

//     Route::get('/', function () {
//         return 'produits';
//     })->name('home');

//     Route::get('/creer', function () {
//         return 'produits creation';
//     });

//     Route::get('/modifier', function () {
//         return 'produits modification';
//     });
// });

// Route::fallback(function(){
//     return to_route('home');
// });
