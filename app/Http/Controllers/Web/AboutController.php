<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use App\Models\WorkProcess;
use App\Traits\CloudinaryTrait;

class AboutController extends Controller
{
    use CloudinaryTrait;
    private $m_about, $m_setting, $m_workProcess;

    public function __construct()
    {
        $this->middleware(['admin', 'auth'])->except(['index']);
        $this->m_about = new About();
        $this->m_setting = new Setting();
        $this->m_workProcess = new WorkProcess();
    }

    public function adminIndex()
    {
        $about = $this->m_about->GetAbout();
        return View('', compact(['about']));
    }

    public function index()
    {
        $setting = $this->m_setting->RetrieveSetting();
        $about = $this->m_about->GetAbout();
        $workProcess = $this->m_workProcess->GetWorkProcess();
        return View('', compact(['setting', 'about', 'workProcess']));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,svg',
            'videoURL' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);
        !is_null($request->thumbnail) ?
            $thumbnailURL = $this->UploadImage($request->file('thumbnail')->getRealPath()) : $thumbnailURL = null;
        $this->m_about->UpdateAbout($thumbnailURL, $request->videoURL, $request->title, $request->content);
        return back()->with('success', 'About successfully created!');
    }
}
