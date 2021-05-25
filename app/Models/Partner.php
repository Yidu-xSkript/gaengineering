<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['image_url', 'company_name', 'slug'];

    public function CreatePartner($imageURL, $company_name, $slug)
    {
        $this::create([
            'image_url' => $imageURL,
            'company_name' => $company_name,
            'slug' => $slug,
        ]);
    }

    public function UpdatePartner($id, $imageURL, $company_name, $slug)
    {
        $partner = $this::find($id);
        $partner->image_url = $imageURL;
        $partner->company_name = $company_name;
        $partner->slug = $slug;
        $partner->save();
    }

    public function DestroyPartner($id)
    {
        $this::find($id)->delete();
    }

    public function GetPartners()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedPartners()
    {
        return $this::paginate(10)->latest();
    }
}
