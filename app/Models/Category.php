<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function post()
    {
        return$this->hasMany(Post::class);


    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    # One To Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
