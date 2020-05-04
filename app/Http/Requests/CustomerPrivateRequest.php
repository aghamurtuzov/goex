<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerPrivateRequest extends FormRequest
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
            "first_name"=>"required|string",
            "last_name"=>"required|string",
            "phone"=>"required",
            "date_of_birth"=>"required|date",
            "gender"=>"required|boolean",
            "passport"=>"required|string|max:8",
            "passport_fin"=>"required|string|max:7",
            "filial_id"=>"required",
            "address"=>"required",
        ];
    }

        public function messages()
    {
        return [
            "first_name.required" => "Ad  sahəsi boş buraxıla bilməz!",
            "first_name.string" => "Ad  sahəsi mətn olmalıdır!",
            "last_name.required" => "Soyad  sahəsi boş buraxıla bilməz!",
            "last_name.string" => "Soyad en sahəsi mətn olmalıdır!",
            "phone.required" => "Telefon sahəsi boş buraxıla bilməz!",
            // "name_ru.string" => "Ad ru sahəsi mətn olmalıdır!",
            // "image.mimes"=>"Sekil formati duzgun deyil",
            // "image.required"=>"Sekil sahəsi boş buraxıla bilməz!",
            // "image.max"=>"Sekil olcusu 1mb dan cox ola bilmez!",
            // "status.required" => "Status sahəsi boş buraxıla bilməz!",
        ];
    }
}
