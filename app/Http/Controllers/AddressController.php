<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller
{
    public function getAddress()
    {
        $results = Address::paginate(20);

        return view("site-admin.address.address", ["results" => $results]);
    }

    public function getAddressEdit($id)
    {
        $result = Address::find($id);

        return view("site-admin.address.address-edit", ["result" => $result]);
    }

    public function postAddressEdit(AddressRequest $request, $id)
    {
        $request->validated();

        $message = !$id ? 'Address əlavə olundu' : 'Address redaktə olundu';

        $request->request->add(['user_id' => Auth::user()->id]);

        BaseController::postModuleEdit($request, $id, 'addresses', $message);

        return Redirect::back();
    }
}
