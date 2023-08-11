<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipoRequest extends FormRequest
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

        $tipo = $this->route('tipo'); 

        return [
            'descricao' => [
                'required',
                'min:2',
                'max:50',
                "unique:tipos,descricao,{$tipo->id},id",
            ],
        ];
    }
}
