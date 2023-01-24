<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        $photos = [['small', 'маленьке фото 256x256'], ['big', 'велике фото 544x812'],];
        return view('pages.photos', compact(['photos']));
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('small_photo')) {
            $user->addMediaFromRequest('small_photo')
                ->usingName('small')
                ->toMediaCollection('small_photos');

            $user->clearMediaCollectionExcept('small_photos', $user->getMedia('small_photos')->last());
        }

        if ($request->hasFile('big_photo')) {
            $user->addMediaFromRequest('big_photo')
                ->usingName('big')
                ->toMediaCollection('big_photos');

            $user->clearMediaCollectionExcept('big_photos', $user->getMedia('big_photos')->last());
        }

        return Redirect::route('photos')->with('status', 'main-updated');
    }
}
