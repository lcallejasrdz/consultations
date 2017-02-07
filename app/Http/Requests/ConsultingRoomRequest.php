<?php

namespace Consultations\Http\Requests;

use Consultations\Http\Requests\Request;

class ConsultingRoomRequest extends Request
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
                    'title' => 'required',
                    'address' => 'required',
                    'lat' => 'required',
                    'lng' => 'required',
                    'logo' => 'required',
                ];
            }
            case 'PUT': {
                return [
                    'title' => 'required',
                    'address' => 'required',
                    'lat' => 'required',
                    'lng' => 'required',
                    'logo' => 'required',
                ];
            }
            default:
                break;
        }
        return [
            //
        ];
    }
}
