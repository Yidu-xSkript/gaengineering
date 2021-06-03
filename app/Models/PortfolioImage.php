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

    public function CreatePortfolioImage(String $image_url, Int $portfolio_id)
    {
        $this::create([
            'image_url' => $image_url,
            'portfolio_id' => $portfolio_id
        ]);
    }

    public function UpdatePortfolioImage(String $image_url, Int $portfolio_id, Int $id)
    {
        $PI = $this::find($id);
        $PI->image_url = $image_url;
        $PI->portfolio_id = $portfolio_id;
        $PI->save();
    }

    public function GetPortfolioImageViaPortfolio(int $portfolio_id)
    {
        return $this::where('portfolio_id', $portfolio_id)->get();
    }

    public function DestroyAll(Int $portfolio_id){
        $portfolio = $this->GetPortfolioImageViaPortfolio($portfolio_id);
        for ($i = 0; $i < count($portfolio); $i++) $this::find($portfolio[$i]->id)->delete();
    }

    public function DestroyPI(Int $id)
    {
        $this::find($id)->delete();
    }
}
