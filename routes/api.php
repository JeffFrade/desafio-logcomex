<?php

use App\Http\CrawlerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrawlerController::class, 'index']);
