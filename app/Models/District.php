<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class District extends Model
{
    use HasFactory;
   
    public static function districts($district_ids){
       return self::whereIn('id' , $district_ids)->get();
    }

    public function scopeDistrict($q , $slug){
        return $q->where('slug', $slug)->firstOrFail();
    }

    public function posts(){
        return $this->belongsToMany(Post::class,'post_districts');
    }
    
       
}
