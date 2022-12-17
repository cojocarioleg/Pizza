<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:50|min:3',
            'phone'=>'nullable|max:50|min:6',
            'size'=>'required|max:50|min:3',
            'pizza'=>'required|max:50|min:4',
            'price'=>'required|max:50|min:2',
            'adress'=>'required|max:50|min:3',
        ];  
    }
}
