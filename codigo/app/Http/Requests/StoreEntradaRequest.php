<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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

            'idfornecedor' => 'required|max:100',
            'valortotal' => 'required',
            'datacompra' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'idfornecedor.required' => 'Campo obrigatório',
            'valortotal.required' => 'Campo obrigatório',
            'datacompra.required' => 'Campo obrigatório'
        ];
    }
}
