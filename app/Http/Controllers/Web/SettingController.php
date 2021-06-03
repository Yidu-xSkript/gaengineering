<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\CloudinaryTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use CloudinaryTrait;
    private $m_setting;

    public function __construct()
    {
        $this->m_setting = new Setting();
    }

    public function index()
    {
        $setting = $this->m_setting->RetrieveSetting();
        return View('post-login.pages.Settings.update', compact('setting'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'about' => 'required',
            'happy_client' => 'required',
            'project' => 'required',
            'years_of_experience' => 'required',
            'awards' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'map_location' => 'required',
            'email' => 'required|email',
            'logo' => !is_null($request->logo) ? 'required|mimes:png|max:7000' : '',
            'favicon' => !is_null($request->favicon) ? 'required|mimes:png|max:7000' : '',
            'skill_img' => !is_null($request->skill_img) ? 'required|image|mimes:jpeg,jpg,png,svg' : ''
        ]);

        $skillImg = !is_null($request->skill_img) ?
            $this->UploadImage($request->file('skill_img')->getRealPath()) : null;

        $this->m_setting->UpdateSetting($request->about, $request->happy_client, $request->project, $request->years_of_experience, $request->awards, $request->phone_number, $request->location, $request->map_location, $request->email, $request->phone_number_2, $request->twitter, $request->facebook, $request->instagram, $request->skype, $request->linked_in, $skillImg, $request->logo, $request->favicon);
        return back()->with('success', 'Setting is successfully saved!');
    }
}
