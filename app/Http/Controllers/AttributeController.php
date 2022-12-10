<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Specialty;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    public function index($attributes)
    {
        $attributes = Attribute::where('database', $attributes)->first();
        return view('attributes.index', compact('attributes'));
    }


    public function show($attributes, $attribute)
    {
        $attributeModelName = Str::ucfirst(Str::singular($attributes));
        $attributeModel = app('App\\Models\\' . $attributeModelName);
        $attributes = Attribute::where('database', $attributes)->first();
        $attribute = $attributeModel::find($attribute);
        return view('attributes.show', compact(['attributes', 'attribute']));
    }
}
