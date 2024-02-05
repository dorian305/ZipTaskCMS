<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Page;

class Menu extends Model
{
    use HasFactory;


    protected $fillable = [
        'label',
        'url',
        'page_id',
    ];

    protected static function booted()
    {
        static::creating(function ($menu) {
            // Generating url
            $slug = Page::find($menu->page_id)->slug;

            $menu->url = "pages/{$slug}";
        });
    }
}
