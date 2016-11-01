<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
class CateAPIController extends Controller
{
    public function index($id = null) {
       return response()->json(Category::all());
    }

    public function show($id) {
        return response()->json(Category::findOrFail($id));
    }
}
