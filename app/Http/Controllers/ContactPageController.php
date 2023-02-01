<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Specialist;
use App\Models\ContactType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactPageController extends Controller
{
    public function index()
    {
        $contactTypes = ContactType::all();

        return view('pages.contacts', compact(['contactTypes']));
    }

    public function store(Request $request)
    {


        return Redirect::route('contacts.index');
    }

    public function update(Request $request)
    {


        return Redirect::route('contacts.index');
    }

    public function destroy(Request $request)
    {


        return Redirect::route('contacts.index');
    }
}
