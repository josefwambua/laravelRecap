<?php

use App\Models\Crudd;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TempInt;

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/home',[TempInt::class,'index']);


 