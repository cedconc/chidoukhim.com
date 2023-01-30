<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteUserProfileRequest extends FormRequest
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

            'name' => 'required',
            'genre' => 'required',
            'statut_marital' => 'required',
            'adresse' => 'required',
            'date_de_naissance' => 'required',
            'telephone' => 'required',
            'langues' => 'required',
            'cohen' => 'required',
            'suivre_conjoint' => 'required',
            'partage_photo' => 'required',

            'age-min' => 'required',
            'age-max' => 'required',
            'photo_1' => 'required',

        ];
    }
}
