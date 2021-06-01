<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image_url', 'slug'];

    public function CreateWCU(String $title, String $imageURL, String $slug)
    {
        $this::create([
            'title' => $title,
            'image_url' => $imageURL,
            'slug' => $slug
        ]);
    }

    public function UpdateWCU(Int $id, String $title, String $imageURL, String $slug)
    {
        $WCU = $this::find($id);
        $WCU->title = $title;
        $WCU->image_url = $imageURL;
        $WCU->slug = $slug;
        $WCU->save();
    }

    public function DestroyWCU(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetWCU()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedWCU()
    {
        return $this::latest()->paginate(9);
    }
}
