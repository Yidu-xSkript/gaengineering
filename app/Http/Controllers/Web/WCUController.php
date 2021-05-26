<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use App\Traits\CloudinaryTrait;

class WCUController extends Controller
{
    use CloudinaryTrait;
    private $wcuModel;

    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except(['index']);
        $this->wcuModel = new WhyChooseUs();
    }

    public function index()
    {
        $wcu = $this->wcuModel->GetWCU();
        return View('', compact(['wcu']));
    }

    public function adminIndex()
    {
        $wcu = $this->wcuModel->GetWCU();
        return View('', compact(['wcu']));
    }

    public function validate__(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'slug' => 'required'
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $imageURL__ = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->wcuModel->CreateWCU($request->title, $imageURL__, $request->slug);
        return back()->with('success', 'WCU is successfully created!');
    }

    public function update(Request $request, $id)
    {
        $this->validate__($request);
        $imageURL__ = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->wcuModel->UpdateWCU($id, $request->title, $imageURL__, $request->slug);
        return back()->with('success', 'WCU is successfully updated!');
    }

    public function destroy($id)
    {
        $this->wcuModel->DestroyWCU($id);
        return back()->with('success', 'WCU is deleted!');
    }
}
