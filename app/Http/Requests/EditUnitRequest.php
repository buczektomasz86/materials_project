<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUnitRequest extends FormRequest
{

    /**
     * Get the attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {

        return [
            'name' => 'nazwa jednostki miary',
            'short' => 'skrót jednostki miary',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:units,name, ' . $this->unit_id . '|max:100',
            'short' => 'required|unique:units,short, ' . $this->unit_id . '|max:10',
        ];
    }
}
