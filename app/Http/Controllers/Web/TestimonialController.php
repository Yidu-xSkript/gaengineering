<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\CloudinaryTrait;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use CloudinaryTrait;
    private $m_testimony;

    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['index']);
        $this->m_testimony = new Testimonial();
    }

    public function index()
    {
        return View();
    }

    public function adminIndex()
    {
        return View();
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'image_url' => !is_null($request->image_url) ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'company_name' => 'required',
            'job_title' => 'required',
            'testimony' => 'required'
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $image_url = $this->UploadImage($request->file('image_url')->getRealPath());
        $this->m_testimony->CreateTestimony($image_url, $request->name, $request->job_title, $request->company_name, $request->testimony);
        return back()->with('success', 'Testimony is successfully created!');
    }

    public function update(Request $request, Int $id)
    {
        $this->validate__($request);
        $image_url = !is_null($request->image_url) ?
            $this->UploadImage($request->file('image_url')->getRealPath()) : null;
        $this->m_testimony->UpdateTestimony($id, $image_url, $request->name, $request->job_title, $request->company_name, $request->testimony);
        return back()->with('success', "Testimony is successfully updated!");
    }

    public function destroy(Int $id)
    {
        $this->m_testimony->DestroyTestimony($id);
        return back()->with('success', 'Testimony is successfully deleted!');
    }
}
