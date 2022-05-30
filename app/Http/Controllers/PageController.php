<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;

class PageController extends Controller
{
    public function page($id){
        $movie = Movie::where('id', $id)->first();
        $page = Movie::all();

        return view('page.index', compact('movie', 'page'));

    
    }
}
