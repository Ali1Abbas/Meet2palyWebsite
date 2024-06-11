<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Companies;
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
    return view('frontend.index');
})->name("frontend.index");

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name("frontend.contact-us");

Route::get('/backgammon', function () {
    date_default_timezone_set('US/Eastern');
    $currenttime = date("m-d-Y H:i:s");
    list($ddd,$ttt) = explode(' ',$currenttime);
    echo "$ddd/$ttt\n";
})->name("frontend.backgammon");

Route::get("/link-storage",function (Request $request){
    Artisan::call("storage:link");

    echo "storage linked.";
    return;
});

Route::get('/privacy', function () {
    return view('frontend.privacy');
})->name("frontend.privacy");

Route::get('/download', function () {
    return view('frontend.download');
})->name("frontend.download");

// Route::match(['get','post'],'support',[HomeController::class,'contactUs'])->name('contactUs');
// Route::get('content/{slug}',[HomeController::class,'getContent'])->name('content');
// Route::get('user/verify/{name}',[UserController::class,'verifyEmail'])->name('verifyEmail');
// Route::match(['get','post'],'user/reset-password/{any}',[UserController::class,'resetPassword'])->name('reset-password');
Route::get("/support",[Companies::class,'support']);
Route::post('/send-message',[companies::class,'sendemail'])->name('contact.send');


