<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contacts\OnlineContact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Contacts\OnlineContactRequest;

class OnlineContactController extends Controller
{
    public function store(OnlineContactRequest $request)
    {

        OnlineContact::create([
            'title' => $request->title,
            'specialist_id' => auth()->user()->id,
        ]);

        return Redirect::route('contacts.index');
    }

    public function update(OnlineContactRequest $request, OnlineContact $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(OnlineContact $contact)
    {

        OnlineContact::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
