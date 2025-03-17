<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
