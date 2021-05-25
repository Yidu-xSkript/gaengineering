<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'portfolio_id'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function CreatePortfolioImage($image_url, $portfolio_id)
    {
        $this::create([
            'image_url' => $image_url,
            'portfolio_id' => $portfolio_id
        ]);
    }

    public function UpdatePortfolioImage($image_url, $portfolio_id, $id)
    {
        $PI = $this::find($id);
        $PI->image_url = $image_url;
        $PI->portfolio_id = $portfolio_id;
        $PI->save();
    }

    public function DestroyPI($id)
    {
        $this::find($id)->delete();
    }
}
