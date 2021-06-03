<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;
    // Change logo and favicon | use local storage.
    // Change Skill image | use local storage.

    protected $fillable = ['about', 'happy_client', 'project', 'years_of_experience', 'awards', 'phone_number', 'location', 'map_location', 'email', 'phone_number_2', 'twitter', 'facebook', 'instagram', 'skype', 'linked_in', 'skill_img'];

    public function UpdateSetting($about, $happy_client, $project, $years_of_experience, $awards, $phone_number, $location, $map_location, $email, $phone_number_2, $twitter, $facebook, $instagram, $skype, $linked_in, $skillImg, $logo, $favicon)
    {
        if (!is_null($logo)) {
    		$logo_update = 'logo.'.$logo->getClientOriginalExtension();
    		Storage::delete('public/uploads/'.$logo_update);
			Storage::putFileAs('public/uploads', $logo, $logo_update);
        }

        if (!is_null($favicon)) {
    		$favicon_update = 'favicon.'.$favicon->getClientOriginalExtension();
    		Storage::delete('public/uploads/'.$favicon_update);
			Storage::putFileAs('public/uploads', $favicon, $favicon_update);
        }

        $setting = $this::first();
        $setting->about = $about;
        $setting->happy_client = $happy_client;
        $setting->project = $project;
        $setting->years_of_experience = $years_of_experience;
        $setting->awards = $awards;
        $setting->phone_number = $phone_number;
        $setting->location = $location;
        $setting->map_location = $map_location;
        $setting->email = $email;
        $setting->phone_number_2 = $phone_number_2;
        $setting->twitter = $twitter;
        $setting->facebook = $facebook;
        $setting->instagram = $instagram;
        $setting->skype = $skype;
        $setting->linked_in = $linked_in;
        if (!is_null($skillImg)) $setting->skill_img = $skillImg;
        $setting->save();
    }

    public function RetrieveSetting()
    {
        return $this::first();
    }
}
