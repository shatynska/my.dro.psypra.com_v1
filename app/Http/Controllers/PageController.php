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

        $specialist_id = $request->user()->id;
        $specialist = Specialist::all()->where('id', $specialist_id)->first();
        $attributes = Attribute::where('is_extendable', true)->get();
        return view('main.edit', compact(['header', 'specialist', 'attributes']));
    }

    public function update(MainUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::route('main.edit')->with('status', 'main-updated');
    }
}
