<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['thumbnail', 'video_url'];

    public function AddVideo($thumbnail, $video_url)
    {
        $this::create([
            'thumbnail' => $thumbnail,
            'video_url' => $video_url
        ]);
    }

    public function UpdateVideo($thumbnail, $video_url, $id)
    {
        $__ = $this::find($id);
        $__->thumbnail = $thumbnail;
        $__->video_url = $video_url;
        $__->save();
    }

    public function DestroyVideo($id)
    {
        $this::find($id)->delete;
    }

    public function GetAllVideos()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedVideos()
    {
        return $this::paginate(9)->latest();
    }
}
