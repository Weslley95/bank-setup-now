<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
        // Validation form
        return [
            'nome' => 'required|min:4'
        ];
    }
    
    /**
     * Messages for user
     * 
     * @return string
     */
    public function messages() {
        
        return [
            'required' => ':attribute obrigatório',
            'nome.min' => 'Mínimo de 4 caracteres'
        ];
    }
}
