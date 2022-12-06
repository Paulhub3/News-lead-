<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Advert;
use Illuminate\Http\Request;
use Jorenvh\Share\Share;


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
            'artical_one' => ['required', 'min:5',],
            'categories' => ['required',  'max:255'],
            'date' => ['required'],
            'image' => 'required',

        ]);

        $posts = new Post;
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->artical_one = $request->artical_one;
        $posts->artical_two = $request->artical_two;
        $posts->artical_three = $request->artical_three;
        $posts->artical_fourth = $request->artical_fourth;
        $posts->artical_fifth = $request->artical_fifth;
        $posts->categories = $request->categories;
        $posts->date =  $request->date;
        $posts->read_link = $request->read_link;
        $posts->link_text = $request->link_text;

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

        $shareComponent = \Share::page(
            'https://easternleadexpress.ng/',
            'Leading The People ... Moulding Opinions',

        )->facebook()->twitter()->linkedin()->telegram()->whatsapp()->reddit();

        return view('pages.reading-page', [

            'post' => $post,
            'shows' => $shows,
            'recents' => $recents,
            'adverts' => $adverts,

            'shareComponent' => $shareComponent,

        ]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'artical_one' => ['required', 'min:5',],
            'date' => ['required'],
            'categories' => ['required'],
        ]);

        $post = Post::find($id);

        $post->description = $request->description;
        $post->artical_one = $request->artical_one;
        $post->artical_two = $request->artical_two;
        $post->artical_fourth = $request->artical_fourth;
        $post->artical_fifth = $request->artical_fifth;
        $post->date = $request->input('date');
        $post->categories = $request->input('categories');
        $post->read_link = $request->input('read_link');
        $post->link_text = $request->input('link_text');

        $post->update();

        return redirect()->route('posts.post')->with('message', 'Post Updated Successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.post')->with('delete', 'Post Delete Successfully');
    }
}
