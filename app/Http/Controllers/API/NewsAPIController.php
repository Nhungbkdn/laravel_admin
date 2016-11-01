<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;
class NewsAPIController extends Controller
{
    public function index($id = null) {
       return response()->json(News::all());
    }

    public function show($id) {
        return response()->json(News::findOrFail($id));
    }
}
