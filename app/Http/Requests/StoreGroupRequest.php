<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    /**
     * Get the attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {

        return [
            'name' => 'nazwa grupy',
            'parent_group_id' => 'grupa nadrzędna',
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
            'name' => 'required|unique:groups|max:100',
        ];
    }
}
