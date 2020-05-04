<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InsertOrUpdateController extends Controller
{
    public static function postModuleEdit($data, $id = 0, $module, $message)
    {

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
        }


    }
}
