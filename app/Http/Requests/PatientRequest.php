<?php

namespace Consultations\Http\Requests;

use Consultations\Http\Requests\Request;

class PatientRequest extends Request
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
        switch ($this->method()) {
            case 'POST': {
                return [
                    'id_doctor' => 'required',
                    'id_consulting_room' => 'required',
                    'name' => 'required|max:45',
                    'last_name' => 'required|max:45',
                    'genre' => 'required',
                    'birth_date' => 'required',
                    'state' => 'required',
                    'city' => 'required',
                    'postal_code' => 'required|digits_between:5,5',
                    'colony' => 'required|max:45',
                    'street' => 'required|max:45',
                    'no_exterior' => 'required',
                    'phone' => 'required',
                    'email' => 'required|email|max:300',
                    'menarca' => 'required_with:menstrual_rhythm',
                    'menstrual_rhythm' => 'required_with:menarca',
                    'g' => 'integer',
                    'p' => 'integer',
                    'a' => 'integer',
                    'c' => 'integer',
                ];
            }
            case 'PUT': {
                return [
                    'id_doctor' => 'required',
                    'id_consulting_room' => 'required',
                    'name' => 'required|max:45',
                    'last_name' => 'required|max:45',
                    'genre' => 'required',
                    'birth_date' => 'required',
                    'state' => 'required',
                    'city' => 'required',
                    'postal_code' => 'required|digits_between:5,5',
                    'colony' => 'required|max:45',
                    'street' => 'required|max:45',
                    'no_exterior' => 'required',
                    'phone' => 'required',
                    'email' => 'required|email|max:300',
                    'menarca' => 'required_with:menstrual_rhythm',
                    'menstrual_rhythm' => 'required_with:menarca',
                    'g' => 'integer',
                    'p' => 'integer',
                    'a' => 'integer',
                    'c' => 'integer',
                ];
            }
            default:
                break;
        }
        return [
            //
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'postal_code.digits_between' => 'Código Postal debe tener 5 dígitos',
        ];
    }
}
