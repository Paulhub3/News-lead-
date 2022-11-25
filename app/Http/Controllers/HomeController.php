<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\Advert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //First Middle div
        $posts = Post::latest()->limit(1)->get();
        $shows = Post::orderBy('created_at', 'desc')->skip(1)->take(4)->get();
        $renders = Post::orderBy('created_at', 'desc')->skip(5)->take(4)->get();

        //bottom section div
        $imos = Post::where('categories', 'Imo Politics')->latest()->limit(1)->get();
        $foreigns = Post::where('categories', 'Foreign news')->latest()->limit(1)->get();
        $sports = Post::where('categories', 'Sports')->latest()->limit(1)->get();
        $crimes = Post::where('categories', 'Crime watch')->latest()->limit(1)->get();

        //bottom section div
        $imosLists = Post::where('categories', 'Imo Politics')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();
        $foreignsLists = Post::where('categories', 'Foreign news')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

        $sportsLists = Post::where('categories', 'Sports')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

        $crimesLists = Post::where('categories', 'Crime watch')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();


        //Right Side Advert
        $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();

        $exclusiveNews = Post::where('categories', 'War')->latest()->limit(6)->get();

        return view('pages.home', [

            'posts' => $posts,
            'shows' => $shows,
            'renders' => $renders,
            'imos' => $imos,
            'foreigns' => $foreigns,
            'sports' => $sports,
            'crimes' => $crimes,

            'imosLists' => $imosLists,
            'foreignsLists' => $foreignsLists,
            'sportsLists' => $sportsLists,
            'crimesLists' => $crimesLists,

            'adverts' => $adverts,
            'exclusiveNews' => $exclusiveNews

        ]);
    }
}
