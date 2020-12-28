<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'video_url' => ['nullable'],
        ];
        foreach (config('translatable.locales') as $locale) { 
            $rules += [$locale . '.description' => ['required']]; 
        }

        return $rules;
    }
}
