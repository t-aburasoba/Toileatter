<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'closet_bowl_number' => 'numeric',
            'beautifulness'=>'required',
            'quickly_enter' => 'required',
            'distance'=>'required',
            'created_at'=>'nullable',
            'updated_at'=>'nullable',
            'toilet_image_name'=>'nullable'
        ];
    }
}
