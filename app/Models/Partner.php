<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['image_url', 'url'];

    public function CreatePartner(String $imageURL, String $url)
    {
        $this::create([
            'image_url' => $imageURL,
            'url' => $url,
        ]);
    }

    public function UpdatePartner(Int $id, String $imageURL, String $url)
    {
        $partner = $this::find($id);
        if (!is_null($imageURL)) $partner->image_url = $imageURL;
        $partner->url = $url;
        $partner->save();
    }

    public function DestroyPartner(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetPartners()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedPartners()
    {
        return $this::latest()->paginate(10);
    }
}
