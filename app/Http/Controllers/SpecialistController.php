<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;

class SpecialistController extends Controller
{
    public function index() {
        return view('specialists/index', [
            'specialists' => Specialist::all(),
        ]);
    }

    public function show(Specialist $specialist) {
        return view('specialists/show', [
        'specialist' => $specialist
    ]);
    }
}
