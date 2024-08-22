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
                'trailer' => 'https://youtube.com/watch?v=YoHD9XEInc0',
                'rating' => 4.5,
                'cover_photo' => 'https://media0052.elcinema.com/uploads/_315x420_2028a02da250c809cc4493409e19f7f80e2f37f9045ef28cf033448f56968505.jpg',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Captain America: Brave New World ',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'release_year' => 1999,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=BtzjUN9346w',
                'rating' => 3.5,
                'cover_photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRRXW55l5n8uwXVzLaeeWxNboCJjhLG0tXnFV_Od-n9YArdQd8K',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'How to Train Your Dragon',
                'director' => 'Christopher Nolan',
                'release_year' => 2014,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=al-XKf5IBXg',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDpzpLx_i1I6Qaoq2MqCETVvJN9jVtmLUFREVvRDhgKS57QKSE1miCSGc&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Thunderbolts',
                'director' => 'Christopher Nolan',
                'release_year' => 2025,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=ixe7I87nM-s',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmmyHmvAViqJ2MlyzsAJj5_INYrLMCN71-Qu5GtPd7VcU1SgWBjRZ_UzY&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'The Fantastic Four',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=YYvfvhw3ths',
                'rating' => 4,
                'cover_photo' => 'https://images.news18.com/ibnlive/uploads/2024/07/1722231132_b9983d6f-0a9f-4282-a326-43ed001293a4-3x2.jpeg',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Jurassic World 4',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=wNkaiak8yws',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlbMs3paHhRnMMLNUjiETODIuEzgSXb2z_XAVdS2js5uv_D9Zgli7z0k4&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Avatar 3',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=TNeu5EyGvq8',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2VeLPSNiKk3NJ2Ve_I09zTCBqt1TzyCVvDTfv8ydWoLCOVcgo31zqIfI&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'The Bad Guys 2',
                'director' => 'Christopher Nolan',
                'release_year' => 2025,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=wNEcQ8xhtZk',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW_1XoH4GRomNdAnpAPhBXPth5hfPAl9BTc_pDesmh8WzuHi3fxwEJK7tz&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Ballerina ',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=IhXfUTGVEUI',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnSyP16DUTcBVNg7-GNm93YKjXiu9OhxQ9ErrGTUZ1L4KMTsuVQlMgTag&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Mission: Impossible 8',
                'director' => 'Christopher Nolan',
                'release_year' => 2025,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=5tp1XryAzLw',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4WrBefMrZ3LUezEF7De9pi3hGiEJ5anT3la02hZHJSEit8m_a',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Michael',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=v8f4VOBWE2s',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkcI22Pi5PZGYrltNH4soegUnY44DmVJfMfWANfblYLaW2TZmwGSJgH_U&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Elio',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=3DLwM_MQJIw',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGkFYCMmYtu1Di90AygYUKZgS9SYV3KY2wOVN_mfVITldjpV78Ygr_brk&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => '28 Years Later',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=dbQDaBuxFfY',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ0h1o2uji75Jj3OzlR5ejJloKDx2Hcgsp-HdGtie82JrYXDUMRPInuw&s=0',
                'publisher' => 'Disney'
            ],
            [
                'title' => 'Alto Knights',
                'director' => 'Christopher Nolan',
                'release_year' => 2024,
                'actors' => [
                    'Will Smith', 'Jason Stathm'
                ],
                'trailer' => 'https://www.youtube.com/watch?v=EQlgOLAFYOM',
                'rating' => 4,
                'cover_photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvyTY4UxUqKIISHhbipqGXkylQP62cC9Blv9d34nJR-EZAfXcBYqVAV5E&s=0',
                'publisher' => 'Disney'
            ],
        ];

        // Return the array of movies as a JSON response
        return response()->json($movies);
    }
}
