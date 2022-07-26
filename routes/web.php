<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
Route::get('/send-email',[MailController::class,'mail']);
Route::get('/send-message',[MailController::class,'sendMail'])->name('emails.send');

Route::get('/', function () {
    return view('emails.TestMail');
});
