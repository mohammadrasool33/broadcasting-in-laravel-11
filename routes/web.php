<?php

use App\Events\NewMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('messages',function(){
    return view('messages');
});
Route::get('send',function(){
    event(new NewMessage("hello world","slaw la user"));
});
