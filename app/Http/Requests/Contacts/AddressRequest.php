<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    protected $errorBag = 'addresses';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
        ];
    }
}
