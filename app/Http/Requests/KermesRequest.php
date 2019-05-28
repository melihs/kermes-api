<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KermesRequest extends FormRequest
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
            'name' => 'required|string',
            'date' => 'required|date_format:Y-m-d H:i:s',
            'location' => 'required|string',
            'total_donation' => 'required|integer',
        ];
    }
}
