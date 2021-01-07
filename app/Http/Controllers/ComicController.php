<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id) {
        return 'details for: ' . $id;

        $comics = config('comics');

        // GET SPECIFIC COMIC BY ID FOR THE UNIC DETAIL PAGE FOR EACH COMIC
        $comicDetail = [];
        foreach ($comics as $comic) {
            if ( $id === $comic['id'] ) {
                $comicDetail = $comic;
            }
        }
        // ALTERNATIVE SINTAX W/COLLECT METHOD
        // $comic = collect($comics)->firstWhere('id', $id);
        
        // View association
        return view('comics.show', ['comic' => $comic]);
    }
}
