<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['about', 'happy_client', 'project', 'years_of_experience', 'awards', 'phone_number', 'location', 'map_location', 'email', 'phone_number_2', 'twitter', 'facebook', 'instagram', 'skype', 'linked_in'];

    public function UpdateSetting($about, $happy_client, $project, $years_of_experience, $awards, $phone_number, $location, $map_location, $email, $phone_number_2, $twitter, $facebook, $instagram, $skype, $linked_in)
    {
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
        $setting->save();
    }

    public function RetrieveSetting()
    {
        return $this::first();
    }
}
