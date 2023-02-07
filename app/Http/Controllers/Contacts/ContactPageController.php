<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contacts\ContactType;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();

        return view('pages.contacts', compact(['contactTypes']));
    }
}
