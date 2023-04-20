<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {

    $token = $request->session()->token();

    $token = csrf_token();

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/region/create', [RegionController::class, "create"]);

Route::post('/region_create', [RegionController::class, "save"])->name('add');

Route::get('/region_liste', [RegionController::class, "getAllRegions"]);
Route::get('/region_delete/{id}', [RegionController::class, "destroy"]);
Route::get('/form_update_region/{{$r->id}}', [RegionController::class, "edit"]);
