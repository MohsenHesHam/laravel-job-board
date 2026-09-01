<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class postvalid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'title'=>'required|max:200',
        'auther'=>'required|max:200',
        'body'=>'required|max:200',
        'published'=>'required'
        ];
    }

    #[Override]
    public function messages()
    {
        return [
        'title.required'=>'required field',
        'auther.required'=>'required field',
        'body.required'=>'required field',
        'published.required'=>'required field'

        ];
    }
}
