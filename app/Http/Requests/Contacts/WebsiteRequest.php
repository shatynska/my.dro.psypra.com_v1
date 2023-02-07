<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteRequest extends FormRequest
{
    protected $errorBag = 'websites';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'url'],
        ];
    }
}
