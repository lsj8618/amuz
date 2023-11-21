<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class, 'showPosts'])->name('index');
Route::get('/create',[Controller::class, 'Create'])->name('create');
Route::post('/create_post',[Controller::class, 'CreatePost'])->name('create_post');
Route::get("/detail/{id}", [Controller::class, 'detailPost'])->name("detail_post");
Route::get('/edit/{id}', [Controller::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [Controller::class, 'delete'])->name('delete');
Route::post('/update_post/{id}', [Controller::class, 'update'])->name('update');

