<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BDRequest extends FormRequest
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
            'name' => 'required',
            'code' => 'required',
        ];
    }

    public function messages()
    {

        return ['name.required' => 'Поле имя является обязательным!',
            'code.required' => 'Поле имя является обязательным!'];
    }
}
