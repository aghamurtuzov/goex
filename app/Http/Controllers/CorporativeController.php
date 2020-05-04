<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CorporativeController extends Controller
{
    public function corporative(){
        $corporative = customer::where("type",0)->paginate(10);
        return view("admin.corporative.corporative",["corporative"=>$corporative]);
    }
    public function corporativeProfile($id){
        $corporative = customer::find($id);
        return view("admin.corporative.corporative-profile",["corporative"=>$corporative]);
    }
}
