<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

}
