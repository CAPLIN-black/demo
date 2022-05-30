<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function page($id){
        $movie = Movie::where('id', $id)->first();
        $page = Movie::all();

        return view('movie', compact('movie', 'page'));

    
    }
}
