<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    #many to one
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
}
