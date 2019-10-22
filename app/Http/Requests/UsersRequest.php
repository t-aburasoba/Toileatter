<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'nullable',
            'gender'=>'nullable',
            'created_at'=>'nullable',
            'updated_at'=>'nullable',
            'station_id'=>'nullable',
            'route_id'=>'nullable',
            'user_image'=>'nullable',
            'nickname' => 'nullable', 
            'twitter_id' => 'nullable',
            'avatar' => 'nullable',
        ];
    }
}
