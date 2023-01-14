<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        return view('pages.photos');
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);

        if ($request->hasFile('small_photo')) {
            $request->file('small_photo')->storeAs('photos/' . Auth::user()->id, 'small.' . $request->file('small_photo')->extension());
        }
        if ($request->hasFile('big_photo')) {
            $request->file('big_photo')->storeAs('photos/' . Auth::user()->id, 'big.' . $request->file('big_photo')->extension());
        }

        return Redirect::route('photos')->with('status', 'main-updated');
    }
}
