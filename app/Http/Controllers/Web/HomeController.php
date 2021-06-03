<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Header;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Traits\CloudinaryTrait;

class HomeController extends Controller
{
    use CloudinaryTrait;
    private $m_service, $m_partner, $m_header, $m_setting, $m_about;
    public function __construct()
    {
        $this->m_service = new Service();
        $this->m_partner = new Partner();
        $this->m_header = new Header();
        $this->m_about = new About();
        $this->m_setting = new Setting();
    }

    public function index()
    {
        $services = $this->m_service->GetService();
        $partners = $this->m_partner->GetPartners();
        $setting = $this->m_setting->RetrieveSetting();
        $header = $this->m_header->GetHeader();
        $about = $this->m_about->GetAbout();
        return View('pre-login.pages.Home', compact('services', 'partners', 'setting', 'header', 'about'));
    }

    public function adminIndex()
    {
        $header = $this->m_header->GetHeader();
        return View('post-login.pages.Custom-pages.custom-header.index', compact('header'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpeg,jpg,png,svg' : '',
            'title' => 'required',
            'slug' => 'required'
        ]);
        $image_url = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_header->UpdateHeader($request->title, $request->slug, $image_url);
        return back()->with('success', 'Header is successfully updated!');
    }
}
