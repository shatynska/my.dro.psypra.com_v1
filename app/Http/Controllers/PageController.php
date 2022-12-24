<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialist;
use Illuminate\Http\Request;
use App\Http\Requests\MainUpdateRequest;
use App\Models\Attribute;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function edit(Request $request)
    {
        $header = 'Головне';

        $specialist = Specialist::find($request->user()->id);
        $attributes = Attribute::where('is_extendable', true)->get();
        return view('main', compact(['header', 'specialist', 'attributes']));
    }

    public function update(MainUpdateRequest $request)
    {
        $specialist = Specialist::find($request->user()->id);

        $specialist->update([
            'name' => $request->input('name')
        ]);

        // $request->specialists()->fill($request->validated());

        // $request->specialists()->save();

        return Redirect::route('main')->with('status', 'main-updated');
    }
}
