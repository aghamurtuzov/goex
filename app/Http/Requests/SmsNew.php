<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmsNew extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "message"=>"requried|string|",
            "first_name"=>"requried|string",
            "last_name"=>"required|string",
            "ip_address"=>"required|string",
            "date"=>"required|date",
            "email"=>"required|email|unique",
            "phone"=>"required",
        ];
    }
}
