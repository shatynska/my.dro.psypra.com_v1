<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Http\Requests\UpdateEducationPageRequest;
use Illuminate\Support\Facades\Redirect;

class EducationPageController extends Controller
{
    public function index()
    {

        return view('pages.education');
    }

    public function update(UpdateEducationPageRequest $request)
    {
        $specialist = Specialist::first();

        $specialist->update([
            'education' => $request->input('text'),
        ]);

        return Redirect::route('education.index')->with('status', 'main-updated');
    }
}
