<?php

namespace App\Http\Controllers\AuthSite;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegisterRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CustomerRegisterController extends Controller
{
    public function postSiteRegister(CustomerRegisterRequest $request)
    {
        $customer = Customer::create([
            "email" => $request->get("email"),
            "password" => Hash::make($request->get("password")),
            "customer_code" => Str::random(13)
        ]);
        Auth::guard("customers")->login($customer, true);
        return redirect()->route("getSiteAccount");
    }
}
