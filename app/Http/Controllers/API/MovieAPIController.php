<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieAPIController extends Controller
{
    public function index($id = null) {
          $movies = DB::table('movie')
          ->join('category','category.id', '=', 'movie.category_id')
        ->join('moviestatus', 'movie.moviestatus_id','=','moviestatus.id')
        ->join('age','age.id', '=', 'movie.age_id')
       
        ->select('movie.*','category.name AS cate','age.limit AS age','moviestatus.statusName AS status')

        //->select('category.name AS cate,movie.*,
        // moviestatus.nameStatus AS status, age.name AS age')
        // ->join('schedule','schedule.movie_id', '=','movie.id')
        // ->join('cinema','cinema.id', '=', 'schedule.cinema_id')
        ->get();
        //return $movies;
       return response()->json($movies);
    }

    public function show($id) {
        return response()->json(Movie::findOrFail($id));
    }
   
}
