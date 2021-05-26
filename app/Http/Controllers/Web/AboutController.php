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
    private $aboutModel, $settingModel, $workProcessModel;

    public function __construct()
    {
        $this->middleware(['admin', 'auth'])->except(['index']);
        $this->aboutModel = new About();
        $this->settingModel = new Setting();
        $this->workProcessModel = new WorkProcess();
    }

    public function adminIndex()
    {
        $about = $this->aboutModel->GetAbout();
        return View('', compact(['about']));
    }

    public function index()
    {
        $setting = $this->settingModel->RetrieveSetting();
        $about = $this->aboutModel->GetAbout();
        $workProcess = $this->workProcessModel->GetWorkProcess();
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
        $this->aboutModel->UpdateAbout($thumbnailURL, $request->videoURL, $request->title, $request->content);
        return back()->with('success', 'About successfully created!');
    }
}
