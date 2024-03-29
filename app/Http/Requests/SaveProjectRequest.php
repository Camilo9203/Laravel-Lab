<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Validar si el usario puede editar el proyecto
            //return false; $this->user()->isAdmin();
        
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

            'title' => 'required',
            'url' => 'required',
            'description' => 'required'

        ];
    }
    
    public function messages()
    {
        return [
            
            'title.required' => 'El proyecto necesita un titulo',
            'url.required' => 'El proyecto necesita una URL',
            'description.required' => 'El proyecto necesita una descripción'
        ];
    }
}
