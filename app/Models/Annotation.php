<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    

 protected $guarded=[];




     public function scopeTitle($query, $title)
    {
        if ($title != null) {
            return $query->where('title_az', 'LIKE', '%' . $title . '%');
        } else {
            return $query;
        }
    }


       public function scopeContent($query, $content)
    {
        if ($content != null) {
            return $query->where('content_az', 'LIKE', '%' . $content . '%');
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
}
