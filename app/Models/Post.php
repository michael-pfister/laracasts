<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    // Override the default route key name (id) with the slug, should be used if you have many routes which find items by the same key that is not the id
    /* public function getRouteKeyName()
    {
        return 'slug';
    } */
}
