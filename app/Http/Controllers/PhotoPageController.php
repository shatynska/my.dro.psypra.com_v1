<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        return view('photos');
    }

    public function update($request)
    {

    }
}
