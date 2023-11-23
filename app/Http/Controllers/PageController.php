<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{

    public function index()
    {
        $num_comics = Comic::count();
        return view('home', compact('num_comics'));
    }
}
