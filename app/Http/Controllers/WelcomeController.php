<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Movie;
use App\Models\Serie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('updated_at', 'desc')->take(8)->get();
        $series = Serie::orderBy('created_at', 'desc')->take(8)->get();
        $episodes = Episode::orderBy('created_at', 'desc')->take(8)->get();
        return view('welcome', compact('movies', 'series', 'episodes'));
    }
}
