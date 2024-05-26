<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlatoRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100', Rule::unique(table: 'platos', column: 'name')
            ],
            'categ_plato_id' => ['required',
            Rule::exists(table:'categ_platos', column: 'id')
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'name.unique' => ('El nombre del plato ya existe'),
        ];
    }
}
