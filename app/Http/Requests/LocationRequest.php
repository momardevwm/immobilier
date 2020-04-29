<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
          'description'=>'required|min:13',
          'prix'=>'required',
          'titre'=>'required|min:3',
          'adresse'=>'required|min:2',
          'nombreAppartement'=>'required',
          'image'=>'required|image|max:5000',
          'image2'=>'required|image|max:5000',
          'image1'=>'required|image|max:5000',
        ];
    }
}
