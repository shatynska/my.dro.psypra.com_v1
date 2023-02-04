<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contacts\PhoneNumber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Contacts\PhoneNumberRequest;

class PhoneNumberController extends Controller
{
    public function store(PhoneNumberRequest $request)
    {

        PhoneNumber::create([
            'title' => $request->title,
            'specialist_id' => auth()->user()->id,
        ]);

        return Redirect::route('contacts.index');
    }

    public function update(PhoneNumberRequest $request, PhoneNumber $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(PhoneNumber $contact)
    {

        PhoneNumber::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
