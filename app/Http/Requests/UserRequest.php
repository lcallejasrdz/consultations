<?php

namespace Consultations\Http\Requests;

use Consultations\Http\Requests\Request;

class UserRequest extends Request
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
                    'name' => 'required|max:45',
                    'email' => 'required|email|unique:users,email|max:300',
                    'username' => 'required|unique:users,username|max:45',
                    'password' => 'required|between:6,16',
                    'password_confirmation' => 'same:password',
                ];
            }
            case 'PUT': {
                return [
                    'name' => 'required|max:45',
                    'email' => 'required|email|unique:users,email,'.$this->user->id.'|max:300',
                    'username' => 'required|unique:users,username,'.$this->user->id.'|max:45',
                    'password' => 'between:6,16',
                    'password_confirmation' => 'same:password',
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
