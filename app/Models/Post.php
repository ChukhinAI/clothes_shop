<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ // указанные полня будут заполняться
        "title",
        "description",
        "preview",
        "thumbnail"
    ];

    public function comments()
    {
        $this->hasMany(Comment::class)->orderBy("created_at"); // сорт по времени создания
    }
}
