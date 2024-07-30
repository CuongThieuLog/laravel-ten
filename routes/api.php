<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;



Route::get('users', [User::class, 'index']);