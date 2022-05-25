<?php

use App\Http\Controllers\Admin\{
    CategoryAdminController,
    DashController
};

use Illuminate\Support\Facades\Route;

Route::get('', [DashController::class, 'index']);

Route::resource('categories', CategoryAdminController::class)->names('admin.categories');

