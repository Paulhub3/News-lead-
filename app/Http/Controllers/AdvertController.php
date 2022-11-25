<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::latest()->get();
        return view('adverts.advert', compact('adverts'));
    }

    public function create()
    {
        return view('adverts.create-advert');
    }


    public function store(Request $request)
    {
        $advert = $request->validate([

            'title' => ['required'],
            'page' => ['required'],
            'Ads' => 'required',
        ]);

        $advert = new Advert;
        $advert->title = $request->title;
        $advert->page = $request->page;
        $advert->Ads = $request->Ads;

        if ($request->file('Ads')) {
            $file = $request->file('Ads');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('banners'), $filename);
            $advert['Ads'] = $filename;
        }

        $advert->save();

        return redirect()->route('adverts.advert')->with('status', 'Advert Has Successfully Published');
    }

    public function getter()
    {
        $adverts = DB::select('select * from adverts');
        return view('adverts.delete', ['adverts' => $adverts]);
    }
    public function destroy($id)
    {
        DB::delete('delete from adverts where id = ?', [$id]);
        echo '<h1 style="color:green; text-align: center;">Record deleted successfully</h1>.
        ';
        echo '

            <a href="/adverts" style="color:#008CBA; font-style: oblique; font-size: 30px; text-align: center;
                    text-decoration: none; text-align: center;">
                 Click Here to go back
            </a>
            ';
    }
}
