<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestForm extends FormRequest
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
            'name'           =>'required|unique:posts',
            'birthday'       =>'required',
            'birthplace'    =>'required',
            'religious'      =>'required',
            'ethnicity'      =>'required',
            'nationality'    =>'required',
            'professional'   =>'required',
            'gender'         =>'required',
            'image'          =>'required|image',
            'who'            =>'required',
            'career'         =>'required',
            'education'      =>'required',
            'personal'       =>'required',
            'about'          =>'required',
            'category_id'    =>'required',

        ];
    }
}
