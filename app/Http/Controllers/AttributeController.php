<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        return view('attributes.index');
    }
}
