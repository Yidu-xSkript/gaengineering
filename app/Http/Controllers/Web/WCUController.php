<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use App\Traits\CloudinaryTrait;

class WCUController extends Controller
{
    use CloudinaryTrait;
    private $m_wcu;

    public function __construct()
    {
        $this->m_wcu = new WhyChooseUs();
    }

    public function index()
    {
        $wcus = $this->m_wcu->GetWCU();
        return View('pre-login.pages.WCU', compact(['wcus']));
    }

    public function adminIndex()
    {
        $wcus = $this->m_wcu->GetWCU();
        return View('post-login.pages.wcu.index', compact(['wcus']));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'slug' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $imageURL__ = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_wcu->CreateWCU($request->title, $imageURL__, $request->slug);
        return back()->with('success', 'WCU is successfully created!');
    }

    public function update(Request $request, $id)
    {
        $this->validate__($request);
        $imageURL__ = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_wcu->UpdateWCU($id, $request->title, $imageURL__, $request->slug);
        return back()->with('success', 'WCU is successfully updated!');
    }

    public function destroy($id)
    {
        $this->m_wcu->DestroyWCU($id);
        return back()->with('success', 'WCU is deleted!');
    }
}
