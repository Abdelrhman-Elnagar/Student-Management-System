<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'studentEmail'=>'required|email',
            'studentFName'=>'required|alpha|between:3,11',
            'studentLName'=>'required|alpha|between:3,11',
        ];
    }
    public function messages()
    {
        return [

        ];
    }
    public function attributes(): array
    {
        return [
            'studentEmail'=>'email',
            'studentFName'=>'first name',
            'studentLName'=>'last name',

        ];
    }
}
