<?php

use App\Http\Controllers\GetCompaniesController;
use App\Http\Controllers\StoreCompanyController;
use App\Http\Controllers\UpdateCompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('companies')->group(function () {
    Route::post('/', StoreCompanyController::class);
    Route::get('/{ids?}', GetCompaniesController::class);
    Route::put('{company}', UpdateCompanyController::class);
});
