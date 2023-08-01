<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $id = $this->segment(3);
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST': {
                return [
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    'title' => 'required|string|max:100',
                    'sub_title' => 'string|max:100|nullable',
                    'desc' => 'nullable|string',
                ];

            }
            case 'PUT':
            case 'PATCH':
            {

                return [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                    'title' => 'required|string|max:100',
                    'sub_title' => 'string|max:100|nullable',
                    'desc' => 'nullable|string',
                ];
            }
            default:break;
        }

    }
}
