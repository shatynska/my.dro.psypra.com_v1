<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contacts\Address;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Contacts\AddressRequest;

class AddressController extends Controller
{
    public function store(AddressRequest $request)
    {

        Address::create([
            'title' => $request->title,
        ]);

        return Redirect::route('contacts.index');
    }

    public function update(AddressRequest $request, Address $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(Address $contact)
    {

        Address::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
