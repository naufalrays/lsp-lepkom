<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'name', 'email', 'content']; // fillable digunakan untuk field apa saja yang dapat diisi lewat form

    public function article() // belongsTo berarti comment adalah milik article
    {
        return $this->belongsTo(Article::class);
    }
}
