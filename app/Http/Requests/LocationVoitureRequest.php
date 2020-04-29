<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationVoitureRequest extends FormRequest
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
          'description_v'=>'required|min:13',
          'prix_v'=>'required',
          'adresse_v'=>'required|min:2',
          'titre_v'=>'required|min:5',
          'image_v'=>'required|image|max:5000',
        ];
    }
}
