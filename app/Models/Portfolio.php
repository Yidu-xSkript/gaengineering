<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image_url', 'portfolio_category_id', 'project_date', 'slug', 'portfolio_url'];

    public function portfolio_images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }

    public function portfolio_category()
    {
        return $this->hasOne(PortfolioCategory::class, 'id', 'portfolio_category_id');
    }

    public function CreatePortfolio(String $title, String $image_url, Int $portfolio_category_id, $project_date, String $slug, String $portfolio_url)
    {
        $this::create([
            'title' => $title,
            'image_url' => $image_url,
            'portfolio_category_id' => $portfolio_category_id,
            'project_date' => $project_date,
            'slug' => $slug,
            'portfolio_url' => $portfolio_url
        ]);
    }

    public function UpdatePortfolio(String $title, String $image_url, Int $portfolio_category_id, $project_date, String $slug, String $portfolio_url, Int $id) {
        $portfolio = $this::find($id);
        $portfolio->title = $title;
        if (!is_null($image_url)) $portfolio->image_url = $image_url;
        $portfolio->portfolio_category_id = $portfolio_category_id;
        $portfolio->project_date = $project_date;
        $portfolio->slug = $slug;
        $portfolio->portfolio_url = $portfolio_url;
        $portfolio->save();
    }

    public function DestroyPortfolio($id)
    {
        $this::find($id)->delete();
    }

    public function GetAllPortfolios()
    {
        return $this::with(['portfolio_category', 'portfolio_images'])->get()->latest();
    }

    public function GetPaginatedPortfolios()
    {
        return $this::with(['portfolio_category', 'portfolio_images'])->latest()->paginate(9);
    }

    public function ViewPortfolio($id)
    {
        return $this::with(['portfolio_category', 'portfolio_images'])->find($id);
    }
}
