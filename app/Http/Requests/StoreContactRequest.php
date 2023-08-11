<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
                    'phone' => 'required|numeric|min:10',
                    'name' => 'required|string|max:100',
                    'message' => 'required|string|min:100',
                    'email' => 'required|string|email|max:255',
                ];

            }
            case 'PUT':
            case 'PATCH':
            {

                return [
                    //
                ];
            }
            default:break;
        }

    }
}
