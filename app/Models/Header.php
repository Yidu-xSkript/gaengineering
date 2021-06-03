<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image_url'];

    public function UpdateHeader(String $title, String $slug, $image_url)
    {
        $header = $this::first();
        $header->title = $title;
        $header->slug = $slug;
        if (!is_null($image_url)) $header->image_url = $image_url;
        $header->save();
    }

    public function GetHeader()
    {
        return $this::first();
    }
}
