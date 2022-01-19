<?php

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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\FrontController::class, 'search'])->name('search');
Route::resource('property', 'App\Http\Controllers\PropertiesController');
Route::resource('agentinfo', 'App\Http\Controllers\AgentsPageController');
Route::resource('blogs', 'App\Http\Controllers\BlogPageController');
Route::get('/userblog', 'App\Http\Controllers\BlogPageController@currentuserblog');
Route::resource('agentproperty', 'App\Http\Controllers\AgentPropertyController');
Route::resource('message', 'App\Http\Controllers\MessageController');
Route::resource('agentmessage', 'App\Http\Controllers\AgentMessageController');
Route::resource('agentdashboard', 'App\Http\Controllers\AgentDashboardController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('userdashboard', 'App\Http\Controllers\UserDashboardController');
Route::resource('sentmessage', 'App\Http\Controllers\SentMessageController');
Route::resource('admindashboard', 'App\Http\Controllers\AdminDashboardController');
Route::resource('contact', 'App\Http\Controllers\ContactController');
Route::resource('admindashboardprofile', 'App\Http\Controllers\FromAdminDashboardProfileController');


Auth::routes();
