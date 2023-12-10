<?php
use App\Http\Controllers\PlacesController;
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


Route::get('AddPlace', [PlacesController::class, 'create']);

Route::post('storePlace', [PlacesController::class, 'store'])->name('Place-added');
Route::get('Place', [CarsController::class, 'index']);