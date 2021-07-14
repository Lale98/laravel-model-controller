<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $title = 'Movies';

        $movies = Movie::all();
        return view('home', compact('title','movies'));
    }
}
