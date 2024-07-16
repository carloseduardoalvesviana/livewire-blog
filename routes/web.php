<?php

use App\Livewire\Post;
use App\Livewire\PostCreate;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");
Route::get("post/create", PostCreate::class);
Route::get("post/{slug}", Post::class)->name('post-slug');
