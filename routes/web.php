<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\EmailNotification;
use App\Models\User;
use App\Http\Controllers\SmsController;

Route::get('/', function () {
    return view('welcome');
});


#Notification
Route::get('send-notification',function (){
//    $user = User::find(1);
//    $user->notify(new EmailNotification());

    $users = User::all();
    foreach ($users as $user){
        $user->notify(new EmailNotification('Mithu','Email Check'));
    }

    return redirect()->back();
});


#Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Send Sms
Route::get('/sms',[SmsController::class,'index']);
Route::post('/send-sms',[SmsController::class,'sendSms'])->name('send.sms');
