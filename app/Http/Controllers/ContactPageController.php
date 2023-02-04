<?php

namespace App\Http\Controllers;

use App\Models\Contacts\ContactType;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();

        return view('pages.contacts', compact(['contactTypes']));
    }
}
