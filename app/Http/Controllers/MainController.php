<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Attribute;
use App\Models\Specialist;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\MainUpdateRequest;

class MainController extends Controller
{
    public function index(): Response
    {
        $specialist = Specialist::first();
        $mainAttributes = Attribute::where('is_main_attribute', true)->get();

        return inertia('Main', [
            'specialist' => $specialist,
            'mainAttributes' => $mainAttributes,
        ]);
    }

    public function update(MainUpdateRequest $request): RedirectResponse
    {
        $specialist = Specialist::first();

        $specialist->update([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
        ]);

        return to_route('main');
    }
}
