<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //con esto se activa el request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //para cada campo se puede crear una regla, por ejemplo en el modelo
            //esto hace que sea requerido, que tenga un mínimo de 5 letras y máximo de 50
        'name_product' => "required|min:5|max:50",
        'brand_id' => "required|integer",
        'stock' => "required|integer",
        'unit_price' => "required|decimal:2"
        ];
    }
}
