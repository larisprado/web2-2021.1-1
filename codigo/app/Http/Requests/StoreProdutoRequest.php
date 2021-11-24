<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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

            'nome' => 'required|max:100',
            'icms' => 'required',
            'ipi' => 'required',
            'frete' => 'required',
            'precofabrica' => 'required',
            'precocompra' => 'required',
            'precovenda' => 'required',
            'lucro' => 'required',
            'desconto' => 'required',
            'quantidade' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo obrigatório',
            'icms.required' => 'Campo obrigatório',
            'ipi.required' => 'Campo obrigatório',
            'frete.required' => 'Campo obrigatório',
            'precofabrica.required' => 'Campo obrigatório',
            'precocompra.required' => 'Campo obrigatório',
            'precovenda.required' => 'Campo obrigatório',
            'lucro.required' => 'Campo obrigatório',
            'desconto.required' => 'Campo obrigatório',
            'quantidade.required' => 'Campo obrigatório'

        ];
    }
}
