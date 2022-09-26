<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\EmailNotification;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});



Route::get('send-notification',function (){
//    $user = User::find(1);
//    $user->notify(new EmailNotification());

    $users = User::all();
    foreach ($users as $user){
        $user->notify(new EmailNotification('Mithu','Email Check'));
    }

    return redirect()->back();
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
