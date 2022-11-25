<?php

namespace App\Http\Controllers;

use App\Models\Tvshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TvshowController extends Controller
{
    public function index()
    {
        $tvshows = Tvshow::orderBy('created_at', 'desc')->paginate(5);

        return view('tvshows.tvshow', compact('tvshows'));
    }

    public function posts()
    {
        return view('tvshows.create-tvshow');
    }

    public function store(Request $request)
    {
        $tvshows = $request->validate([

            'title' => ['required', 'min:5',],
            'description' => ['required', 'min:5'],
            'date' => ['required'],
            'Tvs' => ['required'],
        ]);

        $tvshows = new Tvshow;
        $tvshows->title = $request->title;
        $tvshows->description = $request->description;
        $tvshows->date = $request->date;
        $tvshows->Tvs = $request->Tvs;

        if ($request->file('Tvs')) {
            $file = $request->file('Tvs');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('video'), $filename);
            $tvshows['Tvs'] = $filename;
        }

        $tvshows->save();

        return redirect()->route('tvshows.tvshow')->with('status', 'video uploaded Successfully');
    }

    public function show()
    {
        $tvshow = Tvshow::all();
        return view('tvshows.edit', compact('tvshow'));
    }

    public function edit($id)
    {
        $tvshow = Tvshow::find($id);
        return view('tvshows.edit', compact('tvshow'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required',],
            'description' => ['required', 'min:5',],
            'date' => ['required'],
        ]);

        $tvshow = Tvshow::find($id);

        $tvshow->title = $request->input('title');
        $tvshow->description = $request->input('description');
        $tvshow->date = $request->input('date');

        $tvshow->update();

        return redirect()->route('tvshows.tvshow')->with('message', 'Post Updated Successfully');
    }

    public function return()
    {
        $tvshows = DB::select('select * from tvshows');
        return view('tvshows.delete', ['tvshows' => $tvshows]);
    }

    public function destroy($id)
    {
        DB::delete('delete from tvshows where id = ?', [$id]);
        echo '<h1 style="color:green; text-align: center;">Record deleted successfully</h1>.
        ';
        echo '

            <a href="/tvshows" style="color:#008CBA; font-style: oblique; font-size: 30px; text-align: center;
                    text-decoration: none; text-align: center;">
                 Click Here to go back
            </a>
            ';
    }
}
