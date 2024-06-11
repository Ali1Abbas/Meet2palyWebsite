<?php

use App\Http\Controllers\Api\UserFriendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\FaqController;
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

// Users Api
Route::post('user/social', [UserController::class, 'social']);
Route::post('user/check-user-registration', [UserController::class, 'checkUserRegistration']);

// Advertisements
Route::get('advertisements', [UserController::class,'advertisementsList']);
Route::post('update-advertisement-click-count', [UserController::class,'updateAdvertisementClickCount']);

// Notifications Api
Route::get('notification/list', [NotificationController::class,'index']);

// User Friends
Route::get('user/get-friend', [UserFriendController::class,'getFriend']);
Route::get('user/friend-list', [UserFriendController::class,'friendList']);
Route::post('user/add-friend', [UserFriendController::class,'addFriend']);
Route::post('user/delete-friend', [UserFriendController::class,'deleteFriend']);
Route::post('user/update-request', [UserFriendController::class,'updateRequest']);

