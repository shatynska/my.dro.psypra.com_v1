<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PhotoPageController extends Controller
{
    public function edit(Request $request)
    {
        return view('pages.contacts');
    }

    public function update(Request $request)
    {


        return Redirect::route('contacts')->with('status', 'main-updated');
    }

    public function destroy(Request $request)
    {


        return Redirect::route('contacts')->with('status', 'main-updated');
    }
}
