<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Widget extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['data_type' , 'data_limit' , 'widget_type', 'widget_status'];
}
