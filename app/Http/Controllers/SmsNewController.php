<?php

namespace App\Http\Controllers;

use App\Sms;
use Illuminate\Http\Request;

class SmsNewController extends Controller
{
    public function smsNew(){

        return view('admin.sms.sms-new');
    }
}
