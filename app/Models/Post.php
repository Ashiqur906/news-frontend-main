<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['title' , 'slug' , 'description' , 'status'];

    public function picture(){
        return $this->morphOne(Picture::class, 'imageable'); 
    }

    public function scopeSearch($q , $slug , $type){
        if($type == 'single'){
           return $q->where('slug' , $slug)->firstOrFail();
        } elseif ($type == 'married') {
           return $q->where('slug' , $slug)->get();
        } else {
           return $q->where('slug' , $slug);
        }
    }

    public static function latestPost(){
         return Post::latest()->take(4)->get();
    }

    public function getCat()
    {
        return $this->belongsToMany(Category::class, 'post_categories'); 
    }

    public function scopeDate($q , $request){

        return $q->whereDate('created_at' , $request->date)->paginate(15);
    }

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('desc', function (Builder $builder) {
            $builder->orderBy('id','desc');
        });
    } 


}
