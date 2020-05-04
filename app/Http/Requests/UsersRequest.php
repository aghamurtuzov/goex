<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            "username"=>"requried|string|unique:users",
            "first_name"=>"requried|string",
            "last_name"=>"required|string",
            "ip_address"=>"required|string",
            "email"=>"required|email|unique",
            "phone"=>"required",
            "status"=>"required",
            "roles"=>"required",
            "password"=>"required",
            'password_confirmation' => 'required_with:password|same:password'
        ];
    }
    public function messages()
    {
        return [
            "username.required" => "Istifadeci sahəsi boş buraxıla bilməz!",
            "username.string" => "Istifadeci sahəsi mətn olmalıdır!",
            "username.unique" => "Istifadeci sahəsi eyni ola bilməz!",
            "first_name.required" => "Ad  sahəsi boş buraxıla bilməz!",
            "first_name.string" => "Ad sahəsi mətn olmalıdır!",
            "last_name.required" => "Soyad  sahəsi boş buraxıla bilməz!",
            "last_name.string" => "Soyad sahəsi mətn olmalıdır!",
            "ip_address.required" => "İp Unvan  sahəsi boş buraxıla bilməz!",
            "ip_address.string" => "İp Unvan sahəsi mətn olmalıdır!",
            "email.required" => "Email  sahəsi boş buraxıla bilməz!",
            "email.email" => "Email sahəsi email formatinda olmalıdır!",
            "email.unique" => "Email sahəsi artıq istifadə olunub!",
            "phone.required" => "Telefon sahəsi  boş buraxıla bilməz!",
            "status.required" => "Status sahəsi boş buraxıla bilməz!",
            "password.required" => "Parol sahəsi boş buraxıla bilməz!",
            "password_confirmation.required_with" => "Parol sahəsi ilə eyni olmalıdır!",
            "roles.required" => "Role sahəsi boş buraxıla bilməz!"
        ];
    }
}
