<?php

use App\Http\Controllers\Admin\{
    CategoryAdminController,
    DashController,
    TagController
};

use Illuminate\Support\Facades\Route;

Route::get('', [DashController::class, 'index']);

Route::resource('categories', CategoryAdminController::class)->names('admin.categories');

Route::resource('tags', TagController::class)->names('admin.tags');