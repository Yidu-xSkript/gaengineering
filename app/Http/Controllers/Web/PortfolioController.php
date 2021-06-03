<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioImage;
use App\Traits\CloudinaryTrait;

class PortfolioController extends Controller
{
    use CloudinaryTrait;
    private $m_portfolio, $m_portfolioImage, $m_portfolioCategory;

    public function __construct()
    {
        $this->m_portfolio = new Portfolio();
        $this->m_portfolioCategory = new PortfolioCategory();
        $this->m_portfolioImage = new PortfolioImage();
    }

    public function index()
    {
        $portfolios = $this->m_portfolio->GetAllPortfolios();
        $categories = $this->m_portfolioCategory->GetPC();
        return View('pre-login.pages.Portfolio.Index', compact('portfolios', 'categories'));
    }

    public function detail(int $id)
    {
        $portfolio = $this->m_portfolio->ViewPortfolio($id);
        return View('pre-login.pages.Portfolio.Detail', compact('portfolio'));
    }

    public function adminIndex()
    {
        $portfolios = $this->m_portfolio->GetAllPortfolios();
        $categories = $this->m_portfolioCategory->GetPC();
        return View('post-login.pages.Portfolio.index', compact('portfolios', 'categories'));
    }

    public function adminCreate()
    {
        $categories = $this->m_portfolioCategory->GetPC();
        return View('post-login.pages.Portfolio.create', compact('categories'));
    }

    public function m_indexPortfolioCategory()
    {
        $categories = $this->m_portfolioCategory->GetPC();
        return View('post-login.pages.Portfolio.category', compact('categories'));
    }

    private function m_validatePortfolioCategory(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
    }

    public function m_createPortfolioCategory(Request $request)
    {
        $this->m_validatePortfolioCategory($request);
        $this->m_portfolioCategory->CreatePC($request->name);
        return back()->with('success', 'Portfolio Category is successfully created!');
    }

    public function m_updatePortfolioCategory(Request $request, Int $id)
    {
        $this->m_validatePortfolioCategory($request);
        $this->m_portfolioCategory->UpdatePC($request->name, $id);
        return back()->with('success', 'Portfolio Category is successfully updated!');
    }

    public function m_destroyPortfolioCategory(Int $id)
    {
        $this->m_portfolioCategory->DestroyPC($id);
        return back()->with('success', 'Portfolio Category is successfully deleted!');
    }

    public function m_updatePortfolioImage(Request $request, Int $portfolio_id)
    {
        $this->validate($request, [
            'image_url' => 'required|array',
            'image_url.*' => 'required|image|mimes:jpg,png,jpeg,svg',
        ]);
        if (count($request->image_url) > 0) {
            for ($i = 0; $i < count($request->image_url); $i++) {
                $iu = $this->UploadImage($request->file('image_url')[$i]->getRealPath());
                $this->m_portfolioImage->CreatePortfolioImage($iu, $portfolio_id);
            }
        }
        return back()->with('success', 'Portfolio Image is successfully updated!');
    }

    public function m_destroyPortfolioImage(Int $id, Int $portfolio_id)
    {
        if (count($this->m_portfolioImage->GetPortfolioImageViaPortfolio($portfolio_id)) == 1) {
            return back()->with('error', 'Cannot remove image! at least one image is required');
        }
        $this->m_portfolioImage->DestroyPI($id);
        return back()->with('success', 'Portfolio Image is successfully deleted!');
    }

    public function m_destroyAllPortfolioImage(Int $portfolio_id)
    {
        $this->m_portfolioImage->DestroyAll($portfolio_id);
        return back()->with('success', 'All Portfolio Images are successfully deleted!');
    }

    private function validate__(Request $req)
    {
        $this->validate($req, [
            'image_url' => !is_null($req->image_url) && count($req->image_url) > 0 ? 'required|array' : '',
            'image_url.*' => !is_null($req->image_url) && count($req->image_url) > 0 ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'portfolio_category_id' => 'required|integer',
            'title' => 'required',
            'slug' => 'required',
            'project_date' => 'required',
            'portfolio_url' => 'required',
            'client' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $portfolio = $this->m_portfolio->CreatePortfolio($request->title, $request->portfolio_category_id, $request->project_date, $request->slug, $request->portfolio_url, $request->client);
        if (count($request->image_url) > 0) {
            for ($i = 0; $i < count($request->image_url); $i++) {
                $iu = $this->UploadImage($request->file('image_url')[$i]->getRealPath());
                $this->m_portfolioImage->CreatePortfolioImage($iu, $portfolio->id);
            }
        }
        return back()->with('success', 'Portfolio is successfully created!');
    }

    public function update(Request $request, Int $id)
    {
        $this->validate__($request);
        $this->m_portfolio->UpdatePortfolio($request->title, $request->portfolio_category_id, $request->project_date, $request->slug, $request->portfolio_url, $id, $request->client);
        return back()->with('success', 'Portfolio is successfully updated!');
    }

    public function destroy(Int $id)
    {
        $this->m_portfolio->DestroyPortfolio($id);
        return back()->with('success', 'Portfolio is successfully deleted!');
    }
}
