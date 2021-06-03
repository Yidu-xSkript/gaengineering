<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WorkProcess;
use App\Traits\CloudinaryTrait;

class WorkProcessController extends Controller
{
    use CloudinaryTrait;
    private $m_workProcess;

    public function __construct()
    {
        $this->m_workProcess = new WorkProcess();
    }

    public function index()
    {
        $processes_ = $this->m_workProcess->GetWorkProcess();
        return View('post-login.pages.work_process.index', compact('processes_'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpeg,jpg,png,svg' : '',
            'slug' => 'required',
            'image_position' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $imageURL = $this->UploadImage($request->file('imageURL')->getRealPath());
        $this->m_workProcess->CreateWorkProcess($request->title, $imageURL, $request->slug, $request->image_position);
        return back()->with('success', 'Work Process is successfully created');
    }

    public function update(Request $request, int $id)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_workProcess->UpdateWorkProcess($id, $request->title, $imageURL, $request->slug, $request->image_position);
        return back()->with('success', 'Work Process is successfully updated');
    }

    public function destroy(int $id)
    {
        $this->m_workProcess->DestroyWorkProcess($id);
        return back()->with('success', 'Work Process is successfully deleted!');
    }
}
