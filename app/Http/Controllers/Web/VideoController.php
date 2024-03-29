<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Traits\CloudinaryTrait;

class VideoController extends Controller
{
    use CloudinaryTrait;
    private $m_video;
    public function __construct()
    {
        $this->m_video = new Video();
    }

    public function index()
    {
        $videos = $this->m_video->GetAllVideos();
        return View('pre-login.pages.Videos', compact('videos'));
    }

    public function adminIndex()
    {
        $videos = $this->m_video->GetAllVideos();
        return View('post-login.pages.Video.index', compact('videos'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'video_url' => 'required|url',
            'thumbnail' => !is_null($request->thumbnail) ? 'required|image|mimes:jpeg,jpg,png,svg' : ''
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $thumbnail = $this->UploadImage($request->file('thumbnail')->getRealPath());
        $this->m_video->AddVideo($thumbnail, $request->video_url);
        return back()->with('success', 'Video is successfully deleted!');
    }

    public function update(Request $request, int $id)
    {
        $this->validate__($request);
        $thumbnail = !is_null($request->thumbnail) ?
            $this->UploadImage($request->file('thumbnail')->getRealPath()) : null;
        $this->m_video->UpdateVideo($thumbnail, $request->video_url, $id);
        return back()->with('success', 'Video is successfully deleted!');
    }

    public function destroy(int $id)
    {
        $this->m_video->DestroyVideo($id);
        return back()->with('success', 'Video is successfully deleted!');
    }
}
