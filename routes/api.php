<?php

declare(strict_types=1);

use App\Http\Controllers\Api\JobVacancyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {});

Route::apiResource('/jobs', JobVacancyController::class);
