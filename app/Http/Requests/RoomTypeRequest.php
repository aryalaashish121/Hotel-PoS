<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomTypeRequest extends FormRequest
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
            'name'=>['required','unique:room_types,name,except,id']
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Room Type required.',
            'name.unique'=>'Room Type already exist.',
        ];
    }
}