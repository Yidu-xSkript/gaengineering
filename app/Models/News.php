<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image_url', 'slug'];

    public function CreateNews(String $title, String $imageURL, String $slug)
    {
        $this::create([
            'title' => $title,
            'image_url' => $imageURL,
            'slug' => $slug
        ]);
    }

    public function UpdateNews(Int $id, String $title, $imageURL, String $slug)
    {
        $News = $this::find($id);
        $News->title = $title;
        if (!is_null($imageURL)) $News->image_url = $imageURL;
        $News->slug = $slug;
        $News->save();
    }

    public function DestroyNews(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetNews()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedNews()
    {
        return $this::latest()->paginate(9);
    }

    public function ViewNews($id)
    {
        return $this::find($id);
    }
}
