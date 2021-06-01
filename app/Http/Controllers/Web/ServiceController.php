<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\CloudinaryTrait;

class ServiceController extends Controller
{
    use CloudinaryTrait;
    private $m_service;
    public function __construct()
    {
        $this->m_service = new Service();
    }

    public function index()
    {
        return View('pre-login.pages.Service.Index');
    }

    public function detail()
    {
        return View('pre-login.pages.Service.Detail');
    }

    public function adminIndex()
    {
        $services = $this->m_service->GetPaginatedService();
        return View('post-login.pages.Service.index', compact('services'));
    }

    public function adminCreate()
    {
        return View('post-login.pages.Service.create');
    }

    private function validate__(Request $req)
    {
        $this->validate($req, [
            'imageURL' => !is_null($req->imageURL) ? 'required|image|mimes:jpeg,jpg,png,svg' : '',
            'title' => 'required',
            'slug' => 'required'
        ]);
    }

    public function store(Request $req)
    {
        $this->validate__($req);
        $imageURL = $this->UploadImage($req->file('imageURL')->getRealPath());
        $this->m_service->CreateService($req->title, $imageURL, $req->slug);
        return back()->with('success', 'Service is successfully created!');
    }

    public function update(Request $req, int $id)
    {
        $this->validate__($req);
        $imageURL = !is_null($req->imageURL) ?
            $this->UploadImage($req->file('imageURL')->getRealPath()) : null;
        $this->m_service->UpdateService($id, $req->title, $imageURL, $req->slug);
        return back()->with('success', 'Service is successfully updated!');
    }

    public function destroy(int $id)
    {
        $this->m_service->DestroyService($id);
        return back()->with('success', 'Service is successfully deleted!');
    }
}
