<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
{
    public function authorize() {

        return true;

    }

    public function rules() {

        return [

            'name' => 'required',
            'category' => 'required'
        ];
    }
}