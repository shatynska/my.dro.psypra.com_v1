<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index() {
        return view('specialists.index', [
            'specialists' => Specialist::all(),
        ]);
    }

    public function show(Specialist $specialist) {
        return view('specialists.show', [
        'specialist' => $specialist
    ]);
    }

    
}
