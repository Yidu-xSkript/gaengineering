<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\WorkProcess;
use App\Traits\CloudinaryTrait;

class AboutController extends Controller
{
    use CloudinaryTrait;
    private $m_about, $m_setting, $m_workProcess, $m_skill;

    public function __construct()
    {
        $this->m_about = new About();
        $this->m_setting = new Setting();
        $this->m_workProcess = new WorkProcess();
        $this->m_skill = new Skill();
    }

    public function adminIndex()
    {
        $about = $this->m_about->GetAbout();
        return View('', compact(['about']));
    }

    public function index()
    {
        // $setting = $this->m_setting->RetrieveSetting();
        // $about = $this->m_about->GetAbout();
        // $workProcess = $this->m_workProcess->GetWorkProcess();
        // $skills = $this->m_skill->GetSkills();
        return View('pre-login.pages.About'/*, compact(['setting', 'about', 'workProcess', 'skills'])*/);
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

    public function m_validateSkill(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'progress' => 'required|integer'
        ]);
    }

    public function m_createSkill(Request $request)
    {
        $this->m_validateSkill($request);
        $this->m_skill->CreateSkill($request->name, $request->progress);
        return back()->with('success', 'Skill is successfully created!');
    }

    public function m_updateSkill(Request $request, int $id)
    {
        $this->m_validateSkill($request);
        $this->m_skill->UpdateSkill($id, $request->name, $request->progress);
        return back()->with('success', 'Skill is successfully updated!');
    }

    public function m_destroySkill(int $id)
    {
        $this->m_skill->DestroySkill($id);
        return back()->with('success', 'Skill is successfully deleted!');
    }

    public function m_validateWorkProcess(Request $req)
    {
        $this->validate($req, [
            'title' => 'required',
            'imageURL' => !is_null($req->imageURL) ? 'required|image|mimes:jpeg,jpg,png,svg' : '',
            'slug' => 'required',
            'image_position' => 'required'
        ]);
    }

    public function m_createWorkProcess(Request $req)
    {
        $this->m_validateWorkProcess($req);
        $imageURL = $this->UploadImage($req->file('imageURL')->getRealPath());
        $this->m_workProcess->CreateWorkProcess($req->title, $imageURL, $req->slug, $req->image_position);
        return back()->with('success', 'Work process is successfully created!');
    }

    public function m_updateWorkProcess(Request $req, int $id)
    {
        $this->m_validateWorkProcess($req);
        $imageURL = !is_null($req->imageURL) ?
            $this->UploadImage($req->file('imageURL')->getRealPath()) : null;
        $this->m_workProcess->UpdateWorkProcess($id, $req->title, $imageURL, $req->slug, $req->image_position);
        return back()->with('success', 'Work process is successfully updated!');
    }

    public function m_destroyWorkProcess(int $id)
    {
        $this->m_workProcess->DestroyWorkProcess($id);
        return back()->with('success', 'Work process is successfully deleted!');
    }
}
