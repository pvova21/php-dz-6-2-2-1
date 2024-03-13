<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'surname' => ['required', 'string'],
            'name' => ['required', 'string'],
            'group_id' => ['required']
        ];
    }
}
