<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Specialist;
use App\Models\ContactType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactPageRequest;
use App\Http\Requests\Contacts\EmailRequest;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();

        return view('pages.contacts', compact(['contactTypes']));
    }

}
