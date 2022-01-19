<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name','slug','image'];


    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
