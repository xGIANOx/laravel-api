<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'img' => 'nullable|max:255',
            'link' => 'nullable',
            'repo_link' => 'nullable',
            'description' => 'nullable',
            'type_id' => ['exists:types,id'],
            'technologies' => ['exists:technologies,id'] 

        ];
    }
}
