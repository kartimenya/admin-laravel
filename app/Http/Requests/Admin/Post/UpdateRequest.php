<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        return [
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:15',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages(): array{
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'title.string' => 'Тут должен быть только текст',
            'title.min' => 'Минимальная длина заголовка: 3 символов',
            'content.required' => 'Поле обязательно для заполнения',
            'content.string' => 'Тут должен быть только текст',
            'content.min' => 'Минимальная длина содержания: 15 символа',
            'preview_image.file' => 'Загрузите файл картинки',
            'main_image.file' => 'Загрузите файл картинки',
            'category_id.required' => 'Поле обязательно для заполнения',
            'exists:categories,id' => 'Такой категории нет',
            'tag_ids.*exists:tags,id' => 'Такого тега нет',
        ];
    }
}
