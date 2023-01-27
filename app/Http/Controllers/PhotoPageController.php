<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        $photos = [['title' => 'small', 'description' => 'квадратне фото (мінімально 256x256)'], ['title' => 'big', 'description' => 'вертикальне фото (мінімально 544x812)']];
        return view('pages.photos', compact(['photos']));
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);
        $specialist = Specialist::first();
        $type = $request->type;

        if ($request->hasFile($type . '_photo')) {
            $specialist->addMediaFromRequest($type . '_photo')
                ->usingName($type)
                ->toMediaCollection($type . '_photos');

            $specialist->clearMediaCollectionExcept($type . '_photos', $specialist->getMedia($type . '_photos')->last());
        }

        return Redirect::route('photos')->with('status', 'main-updated');
    }

    public function destroy(Request $request)
    {
        $type = $request->type;

        Specialist::first()->clearMediaCollection($type . '_photos');

        return Redirect::route('photos')->with('status', 'main-updated');
    }
}
