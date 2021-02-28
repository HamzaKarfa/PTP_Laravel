<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CampaignController;
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


//Camapaign routes
Route::get('/campaign/new', [CampaignController::class, 'new_campaign'])->name('newCampaign');
Route::post('/campaign/new/submit', [CampaignController::class, 'store'])->name('campaign.store');
// Route::post('/campaign/update/{id}',[CampaignController::class, 'update'])->name('campaignUpdate');