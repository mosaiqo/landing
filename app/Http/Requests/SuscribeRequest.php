<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SuscribeRequest extends Request
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
        $validations = [];
        
        if(! $this->has('fname') )
        {
            $validations['fname'] = "required";
        }

        return array_merge([
            "email" => "required|email|unique:suscribers,email"
        ], $validations
        );
    }
}
