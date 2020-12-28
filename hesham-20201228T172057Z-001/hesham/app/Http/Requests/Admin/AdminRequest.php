<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => $this->isMethod('post') ? ['required', 'string', 'email', 'max:255', 'unique:admins'] : ['required', 'string', 'email', 'max:255', Rule::unique('admins')->ignore($this->admin->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable']
        ];
    }
}
