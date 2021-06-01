<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Traits\CloudinaryTrait;

class PartnerController extends Controller
{
    use CloudinaryTrait;

    private $m_partner;
    public function __construct()
    {
        $this->m_partner = new Partner();
    }

    public function index()
    {
        $partners = $this->m_partner->GetPartners();
        return View('post-login.pages.Partners.index', compact('partners'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:png,jpeg,jpg,svg' : '',
            'url' => 'required|url'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $imageURL = $this->UploadImage($request->imageURL);
        $this->m_partner->CreatePartner($imageURL, $request->url);
        return back()->with('success', 'Partner is successfully created!');
    }

    public function update(Request $request, int $id)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ? $this->UploadImage($request->imageURL) : null;
        $this->m_partner->UpdatePartner($id, $imageURL, $request->url);
        return back()->with('success', 'Partner is successfully updated!');
    }

    public function destroy(int $id)
    {
        $this->m_partner->DestroyPartner($id);
        return back()->with('success', 'Partner is successfully deleted!');
    }
}
