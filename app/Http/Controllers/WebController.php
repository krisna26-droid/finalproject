<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function authors()
    {
        return view('authors.index');
    }

    public function rate()
    {
        return view('ratings.create');
    }
}
