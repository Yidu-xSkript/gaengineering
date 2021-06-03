<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'portfolio_category_id', 'project_date', 'slug', 'portfolio_url', 'client'];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(PortfolioCategory::class, 'id', 'portfolio_category_id');
    }

    public function CreatePortfolio(String $title, Int $portfolio_category_id, $project_date, String $slug, String $portfolio_url, string $client)
    {
        return $this::create([
            'title' => $title,
            'portfolio_category_id' => $portfolio_category_id,
            'project_date' => Carbon::parse($project_date)->format('Y-m-d'),
            'slug' => $slug,
            'portfolio_url' => $portfolio_url,
            'client' => $client
        ]);
    }

    public function UpdatePortfolio(String $title, Int $portfolio_category_id, $project_date, String $slug, String $portfolio_url, Int $id, string $client) {
        $portfolio = $this::find($id);
        $portfolio->title = $title;
        $portfolio->portfolio_category_id = $portfolio_category_id;
        $portfolio->project_date = $project_date;
        $portfolio->slug = $slug;
        $portfolio->portfolio_url = $portfolio_url;
        $portfolio->client = $client;
        $portfolio->save();
    }

    public function DestroyPortfolio($id)
    {
        $this::find($id)->delete();
    }

    public function GetAllPortfolios()
    {
        return $this::with(['category', 'images'])->latest()->get();
    }

    public function GetPaginatedPortfolios()
    {
        return $this::with(['category', 'images'])->latest()->paginate(9);
    }

    public function ViewPortfolio($id)
    {
        return $this::with(['category', 'images'])->find($id);
    }
}
