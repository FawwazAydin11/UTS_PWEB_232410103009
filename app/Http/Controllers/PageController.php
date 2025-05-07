<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!'
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/')->with('success', 'Kamu telah logout.');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $films = [
            [
                'judul' => 'Inception',
                'negara' => 'USA',
                'produksi' => 'Warner Bros.',
                'tahun' => 2010,
                'rating' => 8.8,
                'poster' => 'https://image.tmdb.org/t/p/original/edv5CZvWj09upOsy2Y6IwDhK8bt.jpg',
                'harga' => 35000,
                'Stok' => 5,
            ],
            [
                'judul' => 'Parasite',
                'negara' => 'Korea Selatan',
                'produksi' => 'CJ Entertainment',
                'tahun' => 2019,
                'rating' => 8.6,
                'poster' => 'https://image.tmdb.org/t/p/w500/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                'harga' => 25000,
                'Stok' => 7,
            ],
            [
                'judul' => 'The Godfather',
                'negara' => 'USA',
                'produksi' => 'Paramount Pictures',
                'tahun' => 1972,
                'rating' => 9.2,
                'poster' => 'https://image.tmdb.org/t/p/w500/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
                'harga' => 40000,
                'Stok' => 4,
            ],
            [
                'judul' => 'Everything Everywhere All at Once',
                'negara' => 'USA',
                'produksi' => 'A24',
                'tahun' => 2022,
                'rating' => 8.0,
                'poster' => 'https://image.tmdb.org/t/p/w500/w3LxiVYdWWRvEVdn5RYq6jIqkb1.jpg',
                'harga' => 35000,
                'Stok' => 2,
            ],
            [
                'judul' => 'JUMBO',
                'negara' => 'Indonesia',
                'produksi' => 'Visinema',
                'tahun' => 2025,
                'rating' => 9.0,
                'poster' => 'https://image.tmdb.org/t/p/original/rbjTGOKWcL6xjhTMGhRN1YNejE5.jpg',
                'harga' => 50000,
                'Stok' => 0,
            ],
            [
                'judul' => 'The Substance',
                'negara' => 'USA',
                'produksi' => 'Working Title Films',
                'tahun' => 2024,
                'rating' => 9.5,
                'poster' => 'https://image.tmdb.org/t/p/original/fuUpv9fPg5riXuWEmzLs9a1oisv.jpg',
                'harga' => 30000,
                'Stok' => 8,
            ],
            [
                'judul' => 'The Monkey',
                'negara' => 'USA',
                'produksi' => 'Atomic Monster Productions',
                'tahun' => 2025,
                'rating' => 8,
                'poster' => 'https://image.tmdb.org/t/p/original/aMM9uHcC7LhhDnU4m8UfhtGsrNv.jpg',
                'harga' => 25000,
                'Stok' => 3,
            ],
            [
                'judul' => 'Conclave',
                'negara' => 'USA',
                'produksi' => 'FilmNation Entertainment',
                'tahun' => 2024,
                'rating' => 8.5,
                'poster' => 'https://image.tmdb.org/t/p/original/8etJ0QXmB80yKy11qD4tEZ1sGuW.jpg',
                'harga' => 40000,
                'Stok' => 6,
            ],
            [
                'judul' => 'The Shadow Strays',
                'negara' => 'Indonesia',
                'produksi' => 'Netflix Studios',
                'tahun' => 2024,
                'rating' => 9,
                'poster' => 'https://image.tmdb.org/t/p/original/pwD9rQJimSaRuYoYdgwgacrNCOY.jpg',
                'harga' => 35000,
                'Stok' => 4,
            ],
            [
                'judul' => 'Sebelum Iblis Menjemput',
                'negara' => 'Indonesia',
                'produksi' => 'Screenplay Films',
                'tahun' => 2018,
                'rating' => 8.5,
                'poster' => 'https://image.tmdb.org/t/p/original/dt2I7cGDPWX16YGMhyiYN6FgU2M.jpg',
                'harga' => 15000,
                'Stok' => 9,
            ],
            [
                'judul' => 'Jatuh Cinta Seperti Di Film-Film',
                'negara' => 'Indonesia',
                'produksi' => 'Imajinari Pictures',
                'tahun' => 2023,
                'rating' => 9.5,
                'poster' => 'https://image.tmdb.org/t/p/original/y5hngW45dLQuySEOJY2awSfhs33.jpg',
                'harga' => 27000,
                'Stok' => 1,
            ],
            [
                'judul' => 'Maharaja',
                'negara' => 'India',
                'produksi' => 'Passion Studios',
                'tahun' => 2024,
                'rating' => 8.5,
                'poster' => 'https://image.tmdb.org/t/p/original/3WgxA2nSzAgMR4DYDty0O9wx68x.jpg',
                'harga' => 20000,
                'Stok' => 4,
            ],
            [
                'judul' => 'Oppenheimer',
                'negara' => 'USA',
                'produksi' => 'Universal Studios',
                'tahun' => 2023,
                'rating' => 9.5,
                'poster' => 'https://image.tmdb.org/t/p/original/mgjKNDzFINGvNFtHSqzfUZ4pk6Y.jpg',
                'harga' => 500000,
                'Stok' => 3,
            ],
            [
                'judul' => 'Anora',
                'negara' => 'USA',
                'produksi' => 'FilmNation Entertainment',
                'tahun' => 2024,
                'rating' => 7,
                'poster' => 'https://image.tmdb.org/t/p/original/r33xVJTZuhhBxHkpXCwUND6gfaL.jpg',
                'harga' => 30000,
                'Stok' => 8,
            ],
            [
                'judul' => '20th Century Girl',
                'negara' => 'Korea Selatan',
                'produksi' => 'CJ E&M',
                'tahun' => 2022,
                'rating' => 8,
                'poster' => 'https://image.tmdb.org/t/p/original/j73DItU1L0N7nmGA9S6sjwxKzPM.jpg',
                'harga' => 20000,
                'Stok' => 10,
            ],
            [
                'judul' => 'Extreme Job',
                'negara' => 'Korea Selatan',
                'produksi' => 'CJ E&M',
                'tahun' => 2019,
                'rating' => 7,
                'poster' => 'https://image.tmdb.org/t/p/original/aIIm4X0PGrSf6nkySxPmNmA8GnE.jpg',
                'harga' => 30000,
                'Stok' => 0,
            ]
        ];

        return view('pengelolaan', compact('films'));
    }
}
