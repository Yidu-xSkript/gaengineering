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

    public function CreatePC($name)
    {
        $this::create(['name' => $name]);
    }

    public function UpdatePC($name, $id)
    {
        $pc = $this::find($id);
        $pc->name = $name;
        $pc->save();
    }

    public function DestroyPC($id)
    {
        $this::find($id)->delete();
    }

    public function GetPC()
    {
        return $this::get()->latest();
    }
}
