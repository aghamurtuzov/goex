<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculateRequest;
use App\Models\Company;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculateController extends Controller
{
    public function postCalculate(CalculateRequest $request)
    {
        $request->validated();
        $country_id = $request->get("country_id");
        $width = $request->get("width");
        $height = $request->get("height");
        $depth = $request->get("depth");
        $weight = $request->get("weight");
        $date = date('Y-m-d H:i:s');
        $time = explode(" ", $date)[1];

        $tariff = Tariff::where('country_id', $country_id)->where('start_weight', '<=', $weight)->where('end_weight', '>', $weight)->first();
        if (!$tariff) {
            return response()->json(['status' => 'false', 'error' => '', 'success' => 403, 'result' => 'Tariff tapilmadi']);
        }

        $companies = Company::where(['tariff_id' => $tariff->id, 'delete' => false])
            ->where('start_date', '<=', $date)
            ->where('end_date', '>=', $date)
            ->where('start_time', '<', $time)
            ->where('end_time', '>', $time)
            ->get();

        $price = $weight * $tariff->price;

        if ($width >= 100 || $height >= 100 || $depth >= 100) {
            $price_ = ($width * $height * $depth) / 6000;
            $price = $price_ > $price ? $price_ : $price;
        }
        if (count($companies)) {
            foreach ($companies as $company) {
                if ($company->is_fix_or_person) {
                    $price -= ($price * $company->discount) / 100;
                } else {
                    $price -= $price * $company->discount;
                }
            }
        }


        return response()->json(['status' => 'true', 'error' => '', 'success' => 200, 'price' => $price]);
    }
}
