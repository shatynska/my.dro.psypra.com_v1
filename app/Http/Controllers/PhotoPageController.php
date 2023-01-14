<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        $files = Storage::files('photos/1');
        return view('pages.photos', compact(['files']));
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);

        $file = $request->file('small_photo');
        $extension = $file->extension();

        if ($request->hasFile('small_photo')) {
            $request->file('small_photo')->storeAs('photos/' . Auth::user()->id, 'small.' . $extension);
        }

        return Redirect::route('photos')->with('status', 'main-updated');
    }
}
