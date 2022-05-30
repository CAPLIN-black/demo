<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use \App\Kategori;

class HomeController extends Controller
{
    public function home(){
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function movie(){
        $movies = Movie::paginate(4);
        return view('movie', compact('movies'));
    }

    public function create(){
        return view('create');
    }

    public function edit(){
        $edit = Movie::all();

        return view('edit', compact('edit'));
    }

    public function film(Request $request){
        Movie::create([
            'judul'     => $request->judul,
            'sutradara' => $request->sutradara,
            'rating'    => $request->sutradara,
            'durasi'    => $request->durasi,
            'sinopsis'  => $request->sinopsis,
            'kategori'  => $request->kategori,
            'genre'     => $request->genre,
            'gambar'  => $request->gambar
        ]);

        return back();
    }
}
