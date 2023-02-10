<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contacts\ContactType;
use App\Models\Contacts\Locality;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();
        $localities = Locality::all();

        return view('pages.contacts', compact(['contactTypes', 'localities']));
    }
}
