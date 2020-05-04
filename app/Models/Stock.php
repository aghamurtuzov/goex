<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model
{

    public $timestamps = false;

    protected $guarded = [];


    public function countryName()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function cityName()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }


    public function scopeCountry_id($query, $country_id)
    {
        if ($country_id != null) {
            return $query->where('country_id', $country_id);
        } else {
            return $query;
        }
    }

    public function scopeCity_id($query, $city_id)
    {
        if ($city_id != null) {
            return $query->where('city_id', $city_id);
        } else {
            return $query;
        }
    }

    public function scopeName($query, $name)
    {
        if ($name != null) {
            return $query->where('name', 'LIKE', '%' . $name . '%');
        } else {
            return $query;
        }
    }


    public function scopeAdress($query, $address)
    {
        if ($address != null) {
            return $query->where('address', 'LIKE', '%' . $address . '%');
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

    public function scopePhone($query, $phone)
    {
        if ($phone != null) {
            return $query->where('phone', 'LIKE', '%' . $phone . '%');
        } else {
            return $query;
        }
    }

    public function scopeDate($query, $date)
    {
        if ($date != null) {
            return $query->where('date', 'LIKE', '%' . $date . '%');
        } else {
            return $query;
        }

    }


    public function scopeType($query, $type)
    {
        if ($type != null) {
            return $query->where('type', $type);
        } else {
            return $query;
        }
    }


}
