<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => ['required'],
            'email'   => ['required','email'],
            'message' => ['required']
        ];
    }
}
