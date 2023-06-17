<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'content', 'image']; // fillable digunakan untuk field apa saja yang dapat diisi lewat form

    public function user() // Ini adalah untuk relasi 1 to Many || user adalah nama database User (Harus Nama Database) 
    {
        return $this->belongsTo(User::class);
    }

    public function comment() // hasMany berarti Article memiliki banyak Comment
    {
        return $this->hasMany(Comment::class);
    }
}
