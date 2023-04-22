<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\ElectionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Election;

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




Route::get('/election/create', [ElectionController::class, "create"]);

Route::post('/election_create', [ElectionController::class, "save"])->name('add');

Route::get('/election_liste', [ElectionController::class, "getAllElections"]);
Route::get('/election_delete/{id}', [ElectionController::class, "destroy"]);
Route::get('/form_update_election/{{$r->id}}', [ElectionController::class, "edit"]);
