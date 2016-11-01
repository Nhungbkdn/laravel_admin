<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
class PromotionAPIController extends Controller
{
     public function index($id = null) {
       return response()->json(Promotion::all());
    }

    public function show($id) {
        return response()->json(Promotion::findOrFail($id));
    }
}
