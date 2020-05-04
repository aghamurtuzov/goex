<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;

use App\Models\Customer;
use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function getCustomer($type)
    {
        $results = Customer::where("type", $type)->paginate(10);

        $filials = Filial::where(['status' => true, 'delete' => false])->get();

        return view("admin.customer.customer", ["results" => $results, "filials" => $filials]);
    }

    public function getCustomerProfile($id)
    {
        $result = Customer::findOrFail($id);

        return view("admin.customer.customer-profile", ["result" => $result]);
    }

    public function postCustomerProfile(CustomerRequest $request)
    {
        $request->validated();

        BaseController::postModuleEdit($request, 1, 'customers', 'Müştəri redaktə olundu');

        return Redirect::back();
    }


}
