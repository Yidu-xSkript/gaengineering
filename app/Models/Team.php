<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'twitter', 'facebook', 'instagram', 'linked_in', 'slug', 'image_url'];

    public function CreateTeam($name, $position, $twitter, $facebook, $instagram, $linked_in, $slug, $image_url)
    {
        $this::create([
            'name' => $name,
            'position' => $position,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'linked_in' => $linked_in,
            'slug' => $slug,
            'image_url' => !is_null($image_url) ? $image_url : null
        ]);
    }

    public function UpdateTeam($id, $name, $position, $twitter, $facebook, $instagram, $linked_in, $slug, $image_url)
    {
        $team = $this::find($id);
        $team->name = $name;
        $team->position = $position;
        $team->twitter = $twitter;
        $team->facebook = $facebook;
        $team->instagram = $instagram;
        $team->linked_in = $linked_in;
        $team->slug = $slug;
        if (!is_null($image_url)) $team->image_url = $image_url;
        $team->save();
    }

    public function DestroyTeam($id)
    {
        $this::find($id)->delete();
    }

    public function GetTeam()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedTeam()
    {
        return $this::paginate(9)->latest();
    }
}
