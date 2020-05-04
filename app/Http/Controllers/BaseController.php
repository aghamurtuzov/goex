<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Filial;
use App\Models\Sack;
use App\Models\Section;
use App\Models\Stock;
use App\Modules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BaseController extends Controller
{

    public static function postModuleEdit(Request $request, $id = 0, $module, $message)
    {

        $data = $request->all();

        array_shift($data);
        App::setLocale('az');

        if ($id >= 0) {
            if ($id == 0) {

                $id = DB::table($module)->insertGetId($data);

                Session::flash('success-message', $message);


            } else if ($id > 0) {

                DB::table($module)
                    ->where('id', $id)
                    ->update($data);

                Session::flash('success-message', $message);

            }
            if ($request->hasFile("image")) {
                $upload = $request->file('image');
                $filename = $upload->store('public/' . $module);

                DB::table($module)
                    ->where('id', $id)
                    ->update([
                        'image' => $filename
                    ]);
            }

        }
    }

    public function postModuleStatus(Request $request)
    {
        $id = $request->get('id');
        $module = $request->get('module');
        $status = $request->get('status');

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'module' => 'required|string',
            'status' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'error' => 'SomethingHaveWrong']);
        }

        $mod = DB::table($module)->where("id", $id)->first();
        if (!$mod) {
            return response()->json(['status' => 'false', 'error' => 'NotFoundModule']);
        }

        DB::table($module)->where("id", $id)->update(['status' => $status]);


        return response()->json(['status' => $status, 'error' => '', 'success' => 200]);
    }

    public function getModuleSearch(Request $request, $module, $path, $viewFile, $mainPath = 'admin')
    {
        $data = $request->all();

        $column_name = $request->get('column_name');
        $order_type = $request->get('order_type');

        //delete first element in data array
        array_shift($data);

        //delete perPage in data array
        $perPage = $data['perPage'];
        unset($data['perPage']);

        //get table name
        $appPrefix = $module == 'user' ? 'App' : 'App\Models';
        $modelName = $appPrefix . '\\' . ucfirst($module);


        $result = $modelName::where('delete', false);

        foreach ($data as $key => $value) {
            if ($key != 'column_name' & $key != 'order_type') {
                $result->$key($value);
            }
        }

        if ($column_name) {
            $result->column_name($column_name, $order_type);
        }

        $results = $result->orderBy('id', 'DESC')->paginate($perPage);


        $data = [
            'results' => $results,
            'module' => $module,
            'perPage' => $perPage,
        ];

        if ($modelName == 'App\Models\Customer') {

            $filials = Filial::where('delete', false)->get();

            $data['filials'] = $filials;
        }
        if ($modelName == 'App\Models\Tariff') {

            $countries = Country::where('delete', false)->get();

            $data['countries'] = $countries;
        }
        if ($modelName == 'App\User') {

            $roles = DB::table('roles')->where(['status' => true, 'is_deleted' => false])->get();

            $data['roles'] = $roles;
        }

        if ($modelName == 'App\Models\Stock') {

            $countries = Country::where('delete', false)->get();

            $data['countries'] = $countries;
        }

        if ($modelName == 'App\Models\Stock') {

            $cities = City::where('delete', false)->get();

            $data['cities'] = $cities;

            $data['type'] = $request->get('type');
        }

        if ($modelName == 'App\Models\Section') {

            $stocks = Stock::where('delete', false)->get();

            $data['stocks'] = $stocks;
        }

        if ($modelName == 'App\Models\SubSection') {

            $sections = Section::where('delete', false)->get();

            $data['sections'] = $sections;
        }

        if ($modelName == 'App\Models\Sack') {

            $stocks = Sack::where('delete', false)->get();

            $data['stocks'] = $stocks;

            $results = new Sack();

            $position = SackController::position($results, $request->get('position'));

            $data['position'] = $position;
        }
        if ($modelName == 'App\Models\Country') {

            $results_ = Category::where('delete', false)->get();

            $data['results_'] = $results_;
        }
        if ($modelName == 'App\Models\Category') {

            $results_ = Country::where('delete', false)->get();

            $data['results'] = $results_;

            $data['results_'] = $results;
        }


        return view($mainPath . '.' . $path . '.' . $viewFile, $data);
    }

    function postModuleDelete(Request $request)
    {
        $id = $request->get('id');
        $module = $request->get('module');

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'module' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'error' => 'SomethingHaveWrong']);
        }

        if (!$module) {
            return response()->json(['status' => 'false', 'error' => 'NotFoundModule']);
        }

        DB::table($module)
            ->where('id', $id)
            ->update([
                'delete' => true,
            ]);

        return response()->json(['status' => 'true', 'error' => '', 'success' => 200]);
    }

}
