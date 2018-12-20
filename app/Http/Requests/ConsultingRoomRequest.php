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
                    'title' => 'required|unique:consulting_rooms,title',
                    'address' => 'required',
                    'lat' => 'required',
                    'lng' => 'required',
                    'logo' => 'image',
                    'monday_init_1' => 'required_with:monday_finish_1',
                    'monday_finish_1' => 'required_with:monday_init_1',
                    'tuesday_init_1' => 'required_with:tuesday_finish_1',
                    'tuesday_finish_1' => 'required_with:tuesday_init_1',
                    'wednesday_init_1' => 'required_with:wednesday_finish_1',
                    'wednesday_finish_1' => 'required_with:wednesday_init_1',
                    'thursday_init_1' => 'required_with:thursday_finish_1',
                    'thursday_finish_1' => 'required_with:thursday_init_1',
                    'friday_init_1' => 'required_with:friday_finish_1',
                    'friday_finish_1' => 'required_with:friday_init_1',
                    'saturday_init_1' => 'required_with:saturday_finish_1',
                    'saturday_finish_1' => 'required_with:saturday_init_1',
                    'sunday_init_1' => 'required_with:sunday_finish_1',
                    'sunday_finish_1' => 'required_with:sunday_init_1',
                    'monday_init_2' => 'required_with:monday_finish_2',
                    'monday_finish_2' => 'required_with:monday_init_2',
                    'tuesday_init_2' => 'required_with:tuesday_finish_2',
                    'tuesday_finish_2' => 'required_with:tuesday_init_2',
                    'wednesday_init_2' => 'required_with:wednesday_finish_2',
                    'wednesday_finish_2' => 'required_with:wednesday_init_2',
                    'thursday_init_2' => 'required_with:thursday_finish_2',
                    'thursday_finish_2' => 'required_with:thursday_init_2',
                    'friday_init_2' => 'required_with:friday_finish_2',
                    'friday_finish_2' => 'required_with:friday_init_2',
                    'saturday_init_2' => 'required_with:saturday_finish_2',
                    'saturday_finish_2' => 'required_with:saturday_init_2',
                    'sunday_init_2' => 'required_with:sunday_finish_2',
                    'sunday_finish_2' => 'required_with:sunday_init_2'
                ];
            }
            case 'PUT': {
                return [
                    'title' => 'required|unique:consulting_rooms,title,'.$this->segment(3),
                    'address' => 'required',
                    'lat' => 'required',
                    'lng' => 'required',
                    'logo' => 'image',
                    'monday_init_1' => 'required_with:monday_finish_1',
                    'monday_finish_1' => 'required_with:monday_init_1',
                    'tuesday_init_1' => 'required_with:tuesday_finish_1',
                    'tuesday_finish_1' => 'required_with:tuesday_init_1',
                    'wednesday_init_1' => 'required_with:wednesday_finish_1',
                    'wednesday_finish_1' => 'required_with:wednesday_init_1',
                    'thursday_init_1' => 'required_with:thursday_finish_1',
                    'thursday_finish_1' => 'required_with:thursday_init_1',
                    'friday_init_1' => 'required_with:friday_finish_1',
                    'friday_finish_1' => 'required_with:friday_init_1',
                    'saturday_init_1' => 'required_with:saturday_finish_1',
                    'saturday_finish_1' => 'required_with:saturday_init_1',
                    'sunday_init_1' => 'required_with:sunday_finish_1',
                    'sunday_finish_1' => 'required_with:sunday_init_1',
                    'monday_init_2' => 'required_with:monday_finish_2',
                    'monday_finish_2' => 'required_with:monday_init_2',
                    'tuesday_init_2' => 'required_with:tuesday_finish_2',
                    'tuesday_finish_2' => 'required_with:tuesday_init_2',
                    'wednesday_init_2' => 'required_with:wednesday_finish_2',
                    'wednesday_finish_2' => 'required_with:wednesday_init_2',
                    'thursday_init_2' => 'required_with:thursday_finish_2',
                    'thursday_finish_2' => 'required_with:thursday_init_2',
                    'friday_init_2' => 'required_with:friday_finish_2',
                    'friday_finish_2' => 'required_with:friday_init_2',
                    'saturday_init_2' => 'required_with:saturday_finish_2',
                    'saturday_finish_2' => 'required_with:saturday_init_2',
                    'sunday_init_2' => 'required_with:sunday_finish_2',
                    'sunday_finish_2' => 'required_with:sunday_init_2'
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
