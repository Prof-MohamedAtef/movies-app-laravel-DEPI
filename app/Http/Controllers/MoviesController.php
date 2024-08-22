<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMovies(){
        $movies = [
            [
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'release_year' => 2010,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'url of trailer',
                'rating' => 4,
                'cover_photo' => 'url of cover photo',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'The Matrix',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'release_year' => 1999,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'url of trailer',
                'rating' => 4,
                'cover_photo' => 'url of cover photo',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'release_year' => 2014,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'url of trailer',
                'rating' => 4,
                'cover_photo' => 'url of cover photo',
                'publisher' => 'Disney'
            ],
        ];

        // Return the array of movies as a JSON response
        return response()->json($movies);
    }
}
