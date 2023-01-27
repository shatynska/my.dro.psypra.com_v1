<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attribute;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateMainPageRequest;
use Illuminate\Support\Facades\Redirect;

class MainPageController extends Controller
{
    public function edit()
    {
        $mainAttributes = Attribute::where('is_main_attribute', true)->get();

        return view('pages.main', compact(['mainAttributes']));
    }

    public function update(UpdateMainPageRequest $request)
    {

        $specialist = Specialist::first();
        $mainAttributes = Attribute::where('is_main_attribute', true)->get();

        $specialist->update([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
        ]);

        foreach ($mainAttributes as $attribute) {
            $set_for_sync = [];

            foreach (DB::table($attribute->database)->get() as $attribute_item) {
                $id = $attribute_item->id;
                $database = $attribute->database;

                if ($request->has($database . '_' . $id)) {
                    $set_for_sync[] = $id;
                };

                $specialist->{$database}()->sync($set_for_sync);
            }
        }

        // $request->specialists()->fill($request->validated());

        // $request->specialists()->save();

        return Redirect::route('main')->with('status', 'main-updated');
    }
}
