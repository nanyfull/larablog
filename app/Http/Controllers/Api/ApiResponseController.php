<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiResponseController extends Controller
{
    public function succesResponse($model)
    {
        return response()->json(['data' =>$model],200);
    }
}
