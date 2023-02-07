<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    protected $errorBag = 'emails';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'email'],
        ];
    }
}
