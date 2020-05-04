<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerPrivateRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Address;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function __construct()
    {

        $this->middleware("customers");
    }

    public function getAccount()
    {
        $result = Customer::find(Auth::guard("customers")->user()->id);

        $filials = Filial::where(["status" => true, "delete" => false])->get();

        $address = Address::where(["status" => true, "delete" => false])->get();

        $countries = Country::where(["status" => true, "delete" => false])->get();
        return view("site.account.account")->with([
            "result" => $result,
            "filials" => $filials,
            "address" => $address,
            "countries" => $countries
        ]);
    }

    public function postSitePrivate(CustomerPrivateRequest $request, $id)
    {
        $request->validated();
        $message = !$id ? 'Şəxsi məlumat əlavə olundu' : 'Şəxsi məlumat redaktə olundu';
        BaseController::postModuleEdit($request, $id, 'customers', $message);
        return Redirect::back();
    }

    public function postPassword(PasswordRequest $request, $id)
    {
        Customer::find($id)->update([
            "password" => Hash::make($request->get("password"))
        ]);
        return Redirect()->back()->with("success-message", "Şifrə redaktə olundu!");
    }
}
