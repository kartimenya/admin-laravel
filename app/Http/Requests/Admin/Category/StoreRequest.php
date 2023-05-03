<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Это поле эбязательно нужно заполнить',
            'title.min' => 'В названии категории должно быть минимуи 3 символа',
        ];
    }
}
