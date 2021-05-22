<?php
use App\Http\Controllers\praktikum;
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
Route::get('/', function () {
    return view('home0132');
});
Route::get('/home0132', [praktikum::class, 'home']);
Route::get('/artikel0132', [praktikum::class, 'artikel']);
Route::get('/cpus0132', [praktikum::class, 'cp']);