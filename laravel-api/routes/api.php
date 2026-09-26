<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\InspectionController;
use App\Http\Controllers\Api\ComplaintController;

Route::apiResource('facilities', FacilityController::class);

Route::apiResource('inspections', InspectionController::class);

Route::apiResource('complaints', ComplaintController::class);