<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Advert;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('posts.post', compact('posts'));
    }


    public function posts()
    {
        return view('posts.create-post');
    }


    public function store(Request $request)
    {
        $posts = $request->validate([

            'title' => ['required', 'min:5',],
            'description' => ['required', 'min:5',],
            'body' => ['required', 'min:5',],
            'categories' => ['required',  'max:255'],
            'date' => ['required'],
            'image' => 'required',
        ]);

        $posts = new Post;
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->body = $request->body;
        $posts->categories = $request->categories;
        $posts->date =  $request->date;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $posts['image'] = $filename;
        }

        $posts->save();

        return redirect()->route('posts.post')->with('status', 'Post Created Successfully');
    }

    public function show()
    {
        $post = Post::all();
        return view('posts.edit', compact('post'));
    }

    public function read(Post $post)
    {
        $post = Post::find($post);
        $shows = Post::orderBy('created_at', 'desc')->skip(1)->take(4)->get();
        $recents = Post::orderBy('created_at', 'desc')->skip(4)->take(4)->get();
        $adverts = Advert::where('page', 'Reading-page')->latest()->limit(2)->get();

        return view('pages.reading-page', [

            'post' => $post,
            'shows' => $shows,
            'recents' => $recents,
            'adverts' => $adverts,

        ]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'body' => ['required'],
            'date' => ['required'],
            'categories' => ['required'],
        ]);

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->date = $request->input('date');
        $post->categories = $request->input('categories');

        $post->update();

        return redirect()->route('posts.post')->with('message', 'Post Updated Successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.post')->with('delete', 'Post Delete Successfully');
    }
}
