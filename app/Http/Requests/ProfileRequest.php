<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => 'required|between:3,100',
            "last_name"  => 'required|between:3,100',
            "email"      =>'required|email',
            "bio"        => 'required',
            "image"=>'image|mimes:png,jpg,webp|max:10240',
            "password"  => 'required|min:8|max:32|confirmed'
        ];
    }
}
