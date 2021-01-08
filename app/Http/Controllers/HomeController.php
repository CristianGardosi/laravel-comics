<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Str imported for friendly slugs
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        // GET COMICS LIST
        $comics = config('comics');

        // SLUGS FOR USER FRIENDLY URLS
        // $key to track the index position of each comic in the array $comics
        foreach ($comics as $key => $comic) {
            // Slug Laravel Helpers property sintax
            $slug = Str::slug($comic['title'], '-');
            // Add new slug property at the original comics array
            $comics[$key]['slug'] = $slug; 
        }

        // 'comics' is the KEY to access the $comics array imported in the previous line from the config folder
        return view('home', ['comics' => $comics]);
    }
}
