<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'name'          =>'required',
            'name' =>'required',
            'birthday' =>'required',
            'birthplace' =>'required',
            'religious' =>'required',
            'ethnicity' =>'required',
            'nationality' =>'required',
            'professional' =>'required',
            'gender' =>'required',
            'who' =>'required',
            'career' =>'required',
            'education' =>'required',
            'personal' =>'required',
            'about' =>'required',
            // 'facebook' =>'required',
            // 'youtube' =>'required',
            // 'twitter' =>'required',
            // 'linkedin' =>'required',
            // 'tiktok' =>'required',
            // 'website' =>'required',
            'published' =>'required',
            'category_id' =>'required',

        ];
    }
}
