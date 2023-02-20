<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateMethodPageRequest;
use App\Http\Requests\UpdateEducationPageRequest;

class MethodPageController extends Controller
{
    public function index()
    {

        return view('pages.method');
    }

    public function update(UpdateMethodPageRequest $request)
    {
        $specialist = Specialist::first();

        $specialist->update([
            'method' => $request->input('text'),
        ]);

        return Redirect::route('method.index')->with('status', 'main-updated');
    }
}
