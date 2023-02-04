<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Website;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Contacts\WebsiteRequest;

class WebsiteController extends Controller
{
    public function store(WebsiteRequest $request)
    {

        Website::create([
            'title' => $request->title,
            'specialist_id' => auth()->user()->id,
        ]);

        return Redirect::route('contacts.index');
    }

    public function update(WebsiteRequest $request, Website $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(Website $contact)
    {

        Website::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
