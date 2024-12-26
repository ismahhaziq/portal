<?php

use App\Livewire\AboutUs;
use App\Livewire\Careers;
use App\Livewire\IndexPage;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', IndexPage::class)->name('home');
Route::get('about-us', AboutUs::class)->name('about-us');
Route::get('services', Services::class)->name('services');
Route::get('careers', Careers::class)->name('careers');

Route::view('index2', 'index2');
Route::view('index3', 'index3');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
