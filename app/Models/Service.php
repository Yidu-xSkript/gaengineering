<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image_url', 'slug'];

    public function CreateService(String $title, String $imageURL, String $slug)
    {
        $this::create([
            'title' => $title,
            'image_url' => $imageURL,
            'slug' => $slug
        ]);
    }

    public function UpdateService(Int $id, String $title, String $imageURL, String $slug)
    {
        $Service = $this::find($id);
        $Service->title = $title;
        if (!is_null($imageURL)) $Service->image_url = $imageURL;
        $Service->slug = $slug;
        $Service->save();
    }

    public function DestroyService(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetService()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedService()
    {
        return $this::paginate(9)->latest();
    }

    public function ViewService($id)
    {
        return $this::find($id);
    }
}
