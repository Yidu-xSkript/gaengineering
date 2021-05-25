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

    public function UpdateNews(Int $id, String $title, String $imageURL, String $slug)
    {
        $News = $this::find($id);
        $News->title = $title;
        $News->image_url = $imageURL;
        $News->slug = $slug;
        $News->save();
    }

    public function DestroyNews(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetNews()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedNews()
    {
        return $this::paginate(9)->latest();
    }

    public function ViewNews($id)
    {
        return $this::find($id);
    }
}
