<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role == "gérant";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => ['required', 'string', 'max:55'],
            'prenom' => ['required', 'string', 'max:55'],
            'email' => ['required', 'string', 'email', 'max:55', 'unique:users,email,'.$this->id.'id'],
            'role' => ['string'],
            'phone' => ['required']
        ];
    }
}
