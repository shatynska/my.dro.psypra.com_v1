<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Specialist;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\MainUpdateRequest;

class MainController extends Controller
{
    public function index(): Response
    {
        return inertia('Main');
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
