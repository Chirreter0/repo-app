<?php

use Illuminate\Support\Facades\Route;
use App\Orchid\Screens\PlatformScreen;

Route::screen('/', PlatformScreen::class)
    ->name('platform.index');
