<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PhotoPageController extends Controller
{
    public function index()
    {
        $photos = [['title' => 'small', 'description' => 'квадратне фото (мінімально 256x256)'], ['title' => 'big', 'description' => 'вертикальне фото (мінімально 544x812)']];
        return view('pages.photos', compact(['photos']));
    }

    public function store(Request $request, $size)
    {
        $request->validate([
            'small_photo' => 'image|max:2048|dimensions:min_width=256,min_height:256',
            'big_photo' => 'image|max:2048|dimensions:min_width=544,min_height:812',
        ]);
        $specialist = Specialist::first();

        if ($request->hasFile($size . '_photo')) {
            $specialist->addMediaFromRequest($size . '_photo')
                ->usingName($size)
                ->toMediaCollection($size . '_photos');

            $specialist->clearMediaCollectionExcept($size . '_photos', $specialist->getMedia($size . '_photos')->last());
        }

        return Redirect::route('photos.index');
    }

    public function destroy($size)
    {

        Specialist::first()->clearMediaCollection($size . '_photos');

        return Redirect::route('photos.index');
    }
}
