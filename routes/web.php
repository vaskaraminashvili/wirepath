<?php

use App\Livewire\ArticleShow;
use Illuminate\Support\Facades\Route;


Route::get('/articles/{article:slug}', ArticleShow::class);
