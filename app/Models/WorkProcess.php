<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcess extends Model
{
    use HasFactory;
    // image_position; Left, Right
    protected $fillable = ['title', 'image_url', 'slug', 'image_position'];

    public function CreateWorkProcess(String $title, String $imageURL, String $slug, String $image_position)
    {
        $this::create([
            'title' => $title,
            'image_url' => $imageURL,
            'slug' => $slug,
            'image_position' => $image_position
        ]);
    }

    public function UpdateWorkProcess(Int $id, String $title, String $imageURL, String $slug, String $image_position)
    {
        $WorkProcess = $this::find($id);
        $WorkProcess->title = $title;
        $WorkProcess->image_url = $imageURL;
        $WorkProcess->slug = $slug;
        $WorkProcess->image_position = $image_position;
        $WorkProcess->save();
    }

    public function DestroyWorkProcess(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetWorkProcess()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedWorkProcess()
    {
        return $this::paginate(9)->latest();
    }
}
