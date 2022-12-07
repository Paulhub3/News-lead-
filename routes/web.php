<?php

use App\Models\Post;
use App\Models\Advert;
use App\Models\Tvshow;
use Illuminate\Http\Request;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\AnalyticsClientFactory;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\TvshowController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/** Admin Dashboard Rout With Function */

Route::get('/dashboard', function () {

    $analyticsConfig = config('analytics');
    $client = AnalyticsClientFactory::createForConfig($analyticsConfig);
    $analytic = new Analytics($client, $analyticsConfig['view_id']);
    $analyticsData = $analytic->fetchVisitorsAndPageViews(Period::days(7));

    $posts = Post::count();

    $adverts = Advert::count();

    $tvshows = Tvshow::count();

    return view('dashboard', [
        'posts'  =>  $posts,
        'adverts' => $adverts,
        'tvshows' => $tvshows,
        'analyticsData' => $analyticsData

    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [HomeController::class, 'index']);

Route::get('/about-us', function () {

    $renders = Post::orderBy('created_at', 'desc')->skip(5)->take(4)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.about', [

        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

Route::get('/privacy', function () {

    return view('pages.privacy');
});


Route::get('/terms', function () {

    return view('pages.terms');
});

Route::get('/advertise', function () {

    return view('pages.advertise');
});



Route::get('/contact-us', function () {

    $renders = Post::orderBy('created_at', 'desc')->skip(5)->take(4)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.contact-us', [

        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

Route::get('/search', function (Request $request) {

    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $posts = Post::query()

        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the return compacted
    return view('pages.search', compact('posts'));
})->name('search');


//Health News
Route::get('/health', function () {

    $posts = Post::where('categories', 'Health')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Health')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Health')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.health', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

//Foreign News
Route::get('/foreign-news', function () {

    $posts = Post::where('categories', 'Foreign news')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Foreign news')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Foreign news')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.foreign-news', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

//Politics
Route::get('politics', function () {

    $posts = Post::where('categories', 'Politics')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Politics')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Politics')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.politics', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});


//Imo Politics
Route::get('/imo-politics', function () {

    $posts = Post::where('categories', 'Imo Politics')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Imo Politics')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Imo Politics')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.imo-politics', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});



//Economy
Route::get('/economy', function () {

    $posts = Post::where('categories', 'Economy')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Economy')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Economy')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.economy', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

//Sports
Route::get('/sport', function () {

    $posts = Post::where('categories', 'Sports')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Sports')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Sports')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.sport', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

//Crime Watch
Route::get('/crime-watch', function () {

    $posts = Post::where('categories', 'Crime watch')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Crime watch')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Crime watch')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.crime-watch', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});



//Entertainment
Route::get('/entertainment', function () {

    $posts = Post::where('categories', 'Entertainment')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Entertainment')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Entertainment')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.entertainment', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});


Route::get('/insecurity', function () {

    $posts = Post::where('categories', 'Insecurity')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Insecurity')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Insecurity')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.insecurity', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

Route::get('/opinion', function () {


    $posts = Post::where('categories', 'Opinion')->latest()->limit(1)->get();

    $shows = Post::where('categories', 'Opinion')->orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    $renders = Post::where('categories', 'Opinion')->orderBy('created_at', 'desc')->skip(5)->take(20)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Home-page')->latest()->limit(2)->get();


    return view('pages.opinion', [

        'posts' => $posts,
        'shows' => $shows,
        'renders' => $renders,
        'adverts' => $adverts,

    ]);
});

//Watch Tv
Route::get('/watch-tv', function () {


    $tvshows = Tvshow::latest()->get();

    $shows = Post::orderBy('created_at', 'desc')->skip(1)->take(4)->get();

    //Right Side Advert
    $adverts = Advert::where('page', 'Reading-page')->latest()->limit(2)->get();


    return view('pages.watch-tv', [

        'tvshows' => $tvshows,
        'shows' => $shows,
        'adverts' => $adverts,

    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/** Post Crud */
Route::middleware('auth')->group(function () {

    Route::get('/show-post', [PostController::class, 'posts'])->name('posts.show-post');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.post');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.create-post');
    Route::get('post', [PostController::class, 'show']);

    Route::get('edit-post/{id}', [PostController::class, 'edit']);
    Route::put('update-post/{id}', [PostController::class, 'update']);

    Route::delete('delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');
});

Route::get('blog/{post}', [PostController::class, 'read']);


/** TvShow Crud */
Route::middleware('auth')->group(function () {

    Route::get('/show-tvshow', [TvshowController::class, 'posts'])->name('tvshows.show-tvshow');
    Route::get('/tvshows', [TvshowController::class, 'index'])->name('tvshows.tvshow');
    Route::post('/tvshows', [TvshowController::class, 'store'])->name('tvshows.create-tvshow');

    Route::get('tvshow', [TvshowController::class, 'show']);

    Route::get('edit-tvshow/{id}', [TvshowController::class, 'edit']);
    Route::put('update-tvshow/{id}', [TvshowController::class, 'update']);


    Route::get('delete-record', [TvshowController::class, 'return']);
    Route::get('destroy/{id}', [TvshowController::class, 'destroy']);
});



/** Advert Crud */
Route::middleware('auth')->group(function () {

    Route::get('/adverts', [AdvertController::class, 'index'])->name('adverts.advert');

    Route::get('advert', [AdvertController::class, 'create'])->name('advert.advert');

    Route::post('/advert-create', [AdvertController::class, 'store'])->name('advert.create-advert');

    Route::get('delete-records', [AdvertController::class, 'getter']);
    Route::get('delete/{id}', [AdvertController::class, 'destroy']);
});


require __DIR__ . '/auth.php';
