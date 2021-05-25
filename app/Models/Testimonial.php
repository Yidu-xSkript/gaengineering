<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'name', 'job_title', 'company_name', 'testimony'];

    public function CreateTestimony($image_url, $name, $job_title, $company_name, $testimony)
    {
        $this::create([
            'name' => $name,
            'image_url' => $image_url,
            'job_title' => $job_title,
            'company_name' => $company_name,
            'testimony' => $testimony
        ]);
    }

    public function UpdateTestimony($id, $image_url, $name, $job_title, $company_name, $testimony)
    {
        $testimony__ = $this::find($id);
        $testimony__->image_url = $image_url;
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
        return $this::get()->latest();
    }

    public function GetPaginatedTestimonies()
    {
        return $this::paginate(9)->latest();
    }
}
