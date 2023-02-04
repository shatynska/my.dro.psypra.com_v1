<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Email;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Contacts\EmailRequest;

class EmailController extends Controller
{
    public function store(EmailRequest $request)
    {

        Email::create([
            'title' => $request->title,
            'specialist_id' => auth()->user()->id,
        ]);

        return Redirect::route('contacts.index');
    }

    public function update(EmailRequest $request, Email $contact)
    {

        return Redirect::route('contacts.index');
    }

    public function destroy(Email $contact)
    {

        Email::destroy($contact->id);

        return Redirect::route('contacts.index');
    }
}
