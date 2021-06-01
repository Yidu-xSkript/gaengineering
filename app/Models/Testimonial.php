<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'name', 'job_title', 'company_name', 'testimony'];

    public function CreateTestimony(String $image_url, String $name, String $job_title, String $company_name, String $testimony)
    {
        $this::create([
            'name' => $name,
            'image_url' => $image_url,
            'job_title' => $job_title,
            'company_name' => $company_name,
            'testimony' => $testimony
        ]);
    }

    public function UpdateTestimony(Int $id, String $image_url, String $name, String $job_title, String $company_name, String $testimony)
    {
        $testimony__ = $this::find($id);
        if (!is_null($image_url)) $testimony__->image_url = $image_url;
        $testimony__->name = $name;
        $testimony__->job_title = $job_title;
        $testimony__->company_name = $company_name;
        $testimony__->testimony = $testimony;
        $testimony__->save();
    }

    public function DestroyTestimony($id)
    {
        $this::find($id)->delete();
    }

    public function GetAllTestimonies()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedTestimonies()
    {
        return $this::latest()->paginate(9);
    }
}
