<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'user_id'=>'max:50',
            'categoria_id'=>'max:256',
            'title'=>'max:256',
            'description'=>'max:256',
            'img'=>'mimes:jpeg,bmp,png',
            'estado'=>'max:30',


        ];
    }
}
