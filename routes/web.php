<?php

use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::get('{page}', 'IndexController')->where('page', '.*');
