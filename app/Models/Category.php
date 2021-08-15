<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // satu category untuk banyak post

    public function post()
    {
        // 1 to many
        return $this->hasMany(Post::class);
    }
}
