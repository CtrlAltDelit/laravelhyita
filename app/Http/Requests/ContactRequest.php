<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_otprav'=>'required',
            'address_otprav' => 'required',
            'number_otprav' => 'required',
            'name_polych' => 'required',
            'address_polych' => 'required',
            'number_polych' => 'required',
           
        ];
    }
}
