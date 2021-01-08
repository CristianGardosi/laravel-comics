<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug) {
        

        $comics = config('comics');


        // GET SPECIFIC COMIC BY USER FRIENDLY SLUG FOR THE UNIC DETAIL PAGE FOR EACH COMIC
        $comic= [];

        foreach ($comics as $item) {

            $titleConverted = Str::slug($item['title'], '-');

            if ($slug == $titleConverted) {
                $comic = $item;
                break;
            }
        }
        // If the user search for an uncorrect URL we have to show the 404 page
        if ( empty($comic) ) {
            abort(404);
        }

        // View association
        return view('comic.show', ['comic' => $comic]);
    }
}
