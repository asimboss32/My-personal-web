<?php

use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;


Route:: get('/',[frontendController::class,'index']);
