<?php

namespace App\Http\Controllers;

use App\Models\Books;

class LibraryController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Perpustakaan',
            'books' => Books::paginate(10)
        ]);
    }
}
