<?php

namespace App\Http\Controllers;

use Inertia\Response;
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
        $request->user()->fill($request->validated());
        dd($request);

        $request->user()->save();

        return to_route('main');
    }
}
