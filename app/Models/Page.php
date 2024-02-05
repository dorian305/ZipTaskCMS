<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'published_at',
        'slug',
    ];


    protected static function booted()
    {
        static::creating(function ($page) {
            // Generate a slug from title
            $page->slug = str_replace(' ', '-', strtolower($page->title));
        });
    }
}
