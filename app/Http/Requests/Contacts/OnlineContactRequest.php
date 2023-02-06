<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class OnlineContactRequest extends FormRequest
{
    protected $errorBag = 'online_contact';

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
