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
        return view('pages.photos');
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('small_photo')) {
            if ($user->getFirstMedia('small_photos')) {
                $user->getFirstMedia('small_photos')->delete();
            }
            $user->addMediaFromRequest('small_photo')
                ->usingName('small')
                ->toMediaCollection('small_photos');
        }
        if ($request->hasFile('big_photo')) {
            if ($user->getFirstMedia('big_photo')) {
                $user->getFirstMedia('big_photo')->delete();
            }
            $user->addMediaFromRequest('big_photo')
                ->usingName('big')
                ->toMediaCollection('big_photos');
        }

        return Redirect::route('photos')->with('status', 'main-updated');
    }
}
