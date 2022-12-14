<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    // 'image','mimes:jpg,png,jpeg,gif,svg','max:2048'
    public function rules()
    {
        return [
            'title'       => 'required',
            'description' => 'required|max:255',
            'category_id' => 'required'
        ];
    }
}
