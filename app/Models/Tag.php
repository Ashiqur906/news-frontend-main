<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['title' , 'slug' , 'status','isMenu'];
    
    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tags');
    }

    public function scopeSearch($query, $tagId)
    {
        return $query->findOrFail($tagId);
    }

}
