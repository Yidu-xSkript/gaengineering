<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['thumbnail', 'video_url'];

    public function AddVideo(String $thumbnail, String $video_url)
    {
        $this::create([
            'thumbnail' => $thumbnail,
            'video_url' => $video_url
        ]);
    }

    public function UpdateVideo($thumbnail, String $video_url, Int $id)
    {
        $__ = $this::find($id);
        if (!is_null($thumbnail)) $__->thumbnail = $thumbnail;
        $__->video_url = $video_url;
        $__->save();
    }

    public function DestroyVideo($id)
    {
        $this::find($id)->delete;
    }

    public function GetAllVideos()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedVideos()
    {
        return $this::latest()->paginate(9);
    }
}
