<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarefaRequest extends FormRequest
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
            //
            'data' => 'date | required',
            'assunto' => 'min: 2 | max: 50 | required',
            'descricao' => 'min: 2 | max: 250 | required',
            'contato' => 'min: 2 | max: 50 | required',
            'tipo_id' => 'required | integer | exists:tipos,id'
        ];
    }
}
