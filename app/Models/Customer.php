<?php

namespace App\Models;

use App\Http\Controllers\AuthSite\CustomerResetPasswordController;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    protected $guard = 'customers';

    public $timestamps = false;

    public function sendPasswordResetNotification($token)
    {

        $this->notify(new ResetPasswordNotification($token));

    }

    //get filialName
    public function filialName()
    {
        return $this->belongsTo('App\Models\Filial', 'filial_id');
    }

    public function scopePhone($query, $phone)
    {
        if ($phone != null) {
            return $query->where('phone', 'LIKE', '%' . $phone . '%');
        } else {
            return $query;
        }
    }

    public function scopeFull_name($query, $full_name)
    {
        if ($full_name != null) {
            return $query->where(DB::raw('CONCAT(first_name," ",  last_name)'), 'LIKE', '%' . $full_name . '%');
        } else {
            return $query;
        }
    }

    public function scopeStatus($query, $status)
    {
        if ($status != null) {
            return $query->where('status', 'LIKE', '%' . $status . '%');
        } else {
            return $query;
        }
    }

    public function scopeFilial_id($query, $filial)
    {
        if ($filial != null) {
            return $query->where('filial_id', $filial);
        } else {
            return $query;
        }
    }

    public function scopeCustomer_code($query, $customer_code)
    {
        if ($customer_code != null) {
            return $query->where('customer_code', 'LIKE', '%' . $customer_code . '%');
        } else {
            return $query;
        }
    }

    public function scopeStart_date($query, $start_date)
    {
        if ($start_date != null) {
            return $query->where('date', '>', $start_date);
        } else {
            return $query;
        }

    }

    public function scopeEnd_date($query, $end_date)
    {
        if ($end_date != null) {
            return $query->where('date', '=<', $end_date);
        } else {
            return $query;
        }

    }
}
