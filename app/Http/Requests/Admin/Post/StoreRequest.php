<?php

namespace App\Http\Requests\Admin\Post;

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
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
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
            'content.required' => 'Поле обязательно для заполнения',
            'content.string' => 'Тут должен быть только текст',
            'preview_image.file' => 'Загрузите файл картинки',
            'main_image.file' => 'Загрузите файл картинки',
            'category_id.required' => 'Поле обязательно для заполнения',
            'exists:categories,id' => 'Такой категории нет',
            'tag_ids.*exists:tags,id' => 'Такого тега нет нет',
        ];
    }
}
