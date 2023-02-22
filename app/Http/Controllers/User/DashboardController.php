<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index() {
        $featuredMovie = Movie::whereIsFeatured(true)->get();
        $movie = movie::all();

        return inertia('User/Dashboard/Index', [
            'featuredMovie' => $featuredMovie,
            'movie' => $movie,
        ]);
    }
}
