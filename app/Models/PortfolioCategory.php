<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function CreatePC(String $name)
    {
        $this::create(['name' => $name]);
    }

    public function UpdatePC(String $name, Int $id)
    {
        $pc = $this::find($id);
        $pc->name = $name;
        $pc->save();
    }

    public function DestroyPC(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetPC()
    {
        return $this::latest()->get();
    }
}
