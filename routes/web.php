<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CreateProducts;
use App\Http\Controllers\ManageStock;
use App\Http\Controllers\TransferStock;
use App\Http\Controllers\NetfusionAdmin;
use App\Http\Controllers\GeneralSettings;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/productlist', [ProductController::class, 'index']);
Route::get('/createproducts', [CreateProducts::class, 'index']);
Route::get('/managestock', [ManageStock::class, 'index']);
Route::get('/transferstock', [TransferStock::class, 'index']);
Route::get('/netfusionadmin', [NetfusionAdmin::class, 'index']);
Route::get('/generalsettings', [GeneralSettings::class, 'index']);