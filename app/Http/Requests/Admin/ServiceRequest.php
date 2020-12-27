<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $rules=[

            'service_category_id' => ['required'], 
            'image' => validate_image(),
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required']];
            $rules += [$locale . '.description' => ['required']]; 
             
        }

        return $rules;
    }
}
