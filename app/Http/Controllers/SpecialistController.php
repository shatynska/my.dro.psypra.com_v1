<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {

        $specialists = Specialist::when(request('specialty'), function ($query) {
            $query->whereRelation('specialties', 'id', request('specialty'));
        })
        ->inRandomOrder()    
        ->get();

        return view('specialists.index', compact('specialists'));
    }

    public function show(Specialist $specialist)
    {
        return view('specialists.show', compact('specialist'));
    }
}
