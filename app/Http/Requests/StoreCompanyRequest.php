<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'companyName' => 'required',
            'companyRegistrationNumber' => 'required',
            'companyFoundationDate' => 'required',
            'country' => 'required',
            'zipCode' => 'required',
            'city' => 'required',
            'streetAddress' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'companyOwner' => 'required',
            'employees' => 'required',
            'activity' => 'required',
            'active' => 'required|boolean',
            'email' => 'required|email|unique:companies',
            'password' => 'required'
        ];
    }
}
