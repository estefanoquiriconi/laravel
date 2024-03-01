<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class InfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'string|nullable|max:100',
            'file_uri' => [
                'nullable',
                File::image()->max(10 * 1024)
            ],
        ];
    }
}
