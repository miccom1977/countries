<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|mimes:gif,png,jpg,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Dodaj plik',
            'file.mimes' => 'Dodany plik musi być plikem gif, png, jpg, jpeg',
            'file.max' => 'Dodany plik może mieć max 2048 kb',
        ];
    }
}
