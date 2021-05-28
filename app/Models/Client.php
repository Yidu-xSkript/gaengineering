<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'company_name', 'slug'];

    public function CreateClient(String $imageURL, String $company_name, String $slug)
    {
        $this::create([
            'image_url' => $imageURL,
            'company_name' => $company_name,
            'slug' => $slug,
        ]);
    }

    public function UpdateClient(Int $id, String $imageURL, String $company_name, String $slug)
    {
        $Client = $this::find($id);
        $Client->image_url = $imageURL;
        $Client->company_name = $company_name;
        $Client->slug = $slug;
        $Client->save();
    }

    public function DestroyClient(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetClients()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedClients()
    {
        return $this::paginate(10)->latest();
    }
}
