<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['thumbnail', 'video_url', 'about_title', 'about_content'];

    public function UpdateAbout($thumbnail, $videoURL, $aboutTitle, $aboutContent, $id)
    {
        $about = $this::first();
        $about->thumbnail = $thumbnail;
        $about->video_url = $videoURL;
        $about->about_title = $aboutTitle;
        $about->about_content = $aboutContent;
        $about->save();
    }

    public function GetAbout()
    {
        return $this::first();
    }
}
