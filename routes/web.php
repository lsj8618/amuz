<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class, 'Index'])->name('index');
Route::get('create',[Controller::class, 'Create'])->name('create');
Route::post('/create_post',[Controller::class, 'CreatePost'])->name('create_post');
