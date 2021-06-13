<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomUpdateRequest extends FormRequest
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
            'name'=>['required','unique:rooms,name,'.$this->name.',name'],
            'room_no'=>['required','unique:rooms,room_no,'.$this->room_no.',room_no'],
            'roomtype_id'=>['required'],
            'rate'=>'',
            'contact'=>''
        ];
    }
}
