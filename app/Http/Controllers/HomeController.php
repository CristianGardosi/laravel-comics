<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // GET COMICS LIST
        $comics = config('comics');
        // 'comics' is the KEY to access the $comics array imported in the previous line from the config folder
        return view('home', ['comics' => $comics]);
    }
}
