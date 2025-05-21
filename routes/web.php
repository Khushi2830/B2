<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "home"])->name("homepage");
Route::get('/admin',[AdminController::class, "admin"])->name("adminpage");
Route::get("/admin/post",[PostController::class, "index"])->name("admin.managePost");
Route::get("/admin/post/insert",[PostController::class, "insert"])->name("admin.insertPost");
Route::post("/admin/post/store",[PostController::class, "store"])->name("admin.storePost");
