<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDistrict extends Model
{
    use HasFactory;

    public static function districtId(){
       return self::select('district_id')->distinct()->get();
    }

    
}
