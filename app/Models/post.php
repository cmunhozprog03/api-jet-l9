<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $fillable = ['name', 'slug', 'extract', 'body', 'status'];
    // one => many Inverse
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // many => many
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // one => hasmorph
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
