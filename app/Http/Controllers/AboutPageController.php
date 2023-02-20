<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateAboutPageRequest;

class AboutPageController extends Controller
{
    public function index()
    {

        return view('pages.about');
    }

    public function update(UpdateAboutPageRequest $request)
    {
        $specialist = Specialist::first();

        $specialist->update([
            'about' => $request->input('text'),
        ]);

        return Redirect::route('about.index')->with('status', 'main-updated');
    }
}
