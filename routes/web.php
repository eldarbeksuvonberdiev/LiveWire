<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Livewire\CalcComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\GroupComponent;
use App\Livewire\HomeComponent;
use App\Livewire\PostComponent;
// use App\Livewire\StudentComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('components.layouts.app');
// });


Route::get('/',PostComponent::class);
Route::get('/group',GroupComponent::class);
Route::get('/category',CategoryComponent::class);
// Route::get('student',StudentComponent::class);
// Route::get('home',HomeComponent::class);
// Route::get('calc',CalcComponent::class);
// Route::get('category',[CategoryController::class,'index']);
// Route::get('car',[CarController::class,'index']);