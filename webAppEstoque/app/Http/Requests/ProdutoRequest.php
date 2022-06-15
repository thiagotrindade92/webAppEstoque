<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required|max:70',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute não pode está vazio'
        ];
    }
}
