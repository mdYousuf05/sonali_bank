<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForeignComplaintValidation extends FormRequest
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
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'nationality' => 'required|alpha',
        'hometown' => 'required|string',
        'passport' => 'required|string',
        'visanum' => 'required|numeric',
        'visatype' => 'required|string',
        'visaexp' => 'required|string',
        'dateofentry' => 'required|string',
        'location' => 'required|string',
        'message' => 'required|string'
        ];
    }
}
