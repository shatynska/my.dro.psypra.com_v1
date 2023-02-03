<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Specialist;
use App\Models\ContactType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactPageRequest;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();

        return view('pages.contacts', compact(['contactTypes']));
    }

    public function store(ContactPageRequest $request, ContactType $contact_type)
    {

        Contact::create([
            'title' => $request->title,
            'contact_type_id' => $contact_type->id,
            'specialist_id' => auth()->user()->id,
        ]);


        return Redirect::route('contacts.index');
    }

    public function update(ContactPageRequest $request, Contact $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(Contact $contact)
    {

        Contact::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
