<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});

Route::view("/login", "forms.login");
Route::view("/form", "forms.normal");
Route::view("/contact", "forms.contact");
Route::post("handelform",[formController::class,"handelFormSubmission"])->name("form.post");