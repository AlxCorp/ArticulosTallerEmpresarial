<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class UpdateArticleRequest extends FormRequest
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
            'title' => [
                'required',
                'min:5',
                'max:255',
                Rule::unique('articles')->ignore($this->route('article')),
            ],
            'content' => 'required',
            'genres' => 'required|array',
            'genres.*' => 'exists:genres,id',
            'image' => 'nullable|image|max:2048'
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->title) {
            $this->merge([
                'slug' => Str::slug($this->title),
            ]);
        }
    }
}
