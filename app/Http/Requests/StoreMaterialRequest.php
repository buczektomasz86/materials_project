<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialRequest extends FormRequest
{
    /**
     * Get the attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {

        return [
            'code' => 'kod materiału',
            'name' => 'nazwa materiału',
            'unit_id' => 'jednostka miary',
            'group_id' => 'grupa materiałów',
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
            'code' => 'required|unique:materials,code, ' . $this->material_id . '|max:10',
            'name' => 'required|unique:materials,name, ' . $this->material_id . '|max:100',
            'unit_id' => 'required',
            'group_id' => 'required',
        ];
    }
}
