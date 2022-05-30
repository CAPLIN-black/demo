<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    protected $fillable = ['judul', 'sutradara', 'rating', 'durasi', 'sinopsis', 'kategori', 'gambar', 'genre'];
}
