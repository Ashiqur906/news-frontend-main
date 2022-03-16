<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class Category extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['title' , 'slug' , 'status','isMenu'];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_categories')->latest();
    }

    public function scopeSearch($query, $catId)
    {
        return $query->findOrFail($catId);
    }

    public function scopeGetId($q, $slug)
    {
        return $q->where('slug' , $slug)->select(['id','title','slug']);
    }


}
