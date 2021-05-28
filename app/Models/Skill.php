<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'progress'];

    public function CreateSkill(string $name, int $progress)
    {
        $this::create([
            'name' => $name,
            'progress' => $progress
        ]);
    }

    public function UpdateSkill(int $id, string $name, int $progress)
    {
        $skill = $this::find($id);
        $skill->name = $name;
        $skill->progress = $progress;
        $skill->save();
    }

    public function DestroySkill(int $id)
    {
        $this::find($id)->delete();
    }

    public function GetSkills()
    {
        return $this::get()->latest();
    }
}
