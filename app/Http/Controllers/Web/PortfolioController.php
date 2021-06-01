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
        return View('pre-login.pages.Portfolio.Index');
    }

    public function detail()
    {
        return View('pre-login.pages.Portfolio.Detail');
    }

    public function adminIndex()
    {
        $portfolios = $this->m_portfolio->GetAllPortfolios();
        return View('post-login.pages.Portfolio.index', compact('portfolios'));
    }

    public function adminCreate()
    {
        $categories = $this->m_portfolioCategory->GetPC();
        return View('post-login.pages.Portfolio.create', compact('categories'));
    }

    public function m_indexPortfolioImage()
    {
        return View();
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

    private function m_validatePortfolioImage(Request $request)
    {
        $this->validate($request, [
            'image_url' => !is_null($request->image_url) ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'portfolio_id' => 'required|integer'
        ]);
    }

    public function m_createPortfolioImage(Request $request)
    {
        $this->m_validatePortfolioImage($request);
        $image_url = !is_null($request->image_url) ?
            $this->UploadImage($request->file('image_url')->getRealPath()) : null;
        $this->m_portfolioImage->CreatePortfolioImage($image_url, $request->portfolio_id);
        return back()->with('success', 'Portfolio Image is successfully created!');
    }

    public function m_updatePortfolioImage(Request $request, Int $id)
    {
        $this->m_validatePortfolioImage($request);
        $image_url = !is_null($request->image_url) ?
            $this->UploadImage($request->file('image_url')->getRealPath()) : null;
        $this->m_portfolioImage->UpdatePortfolioImage($image_url, $request->portfolio_id, $id);
        return back()->with('success', 'Portfolio Image is successfully updated!');
    }

    public function m_destroyPortfolioImage(Int $id)
    {
        $this->m_portfolioImage->DestroyPI($id);
        return back()->with('success', 'Portfolio Image is successfully deleted!');
    }

    private function validate__(Request $req)
    {
        $this->validate($req, [
            'image_url' => !is_null($req->image_url) ? 'required|image|mimes:jpg,png,jpeg,svg' : '',
            'portfolio_category_id' => 'required|integer',
            'title' => 'required',
            'slug' => 'required',
            'project_date' => 'required',
            'portfolio_url' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $image_url = !is_null($request->image_url) ?
            $this->UploadImage($request->file('image_url')->getRealPath()) : null;
        $this->m_portfolio->CreatePortfolio($request->title, $image_url, $request->portfolio_category_id, $request->project_date, $request->slug, $request->portfolio_url);
        return back()->with('success', 'Portfolio is successfully created!');
    }

    public function update(Request $request, Int $id)
    {
        $this->validate__($request);
        $image_url = !is_null($request->image_url) ?
            $this->UploadImage($request->file('image_url')->getRealPath()) : null;
        $this->m_portfolio->UpdatePortfolio($request->title, $image_url, $request->portfolio_category_id, $request->project_date, $request->slug, $request->portfolio_url, $id);
        return back()->with('success', 'Portfolio is successfully updated!');
    }

    public function destroy(Int $id)
    {
        $this->m_portfolio->DestroyPortfolio($id);
        return back()->with('success', 'Portfolio is successfully deleted!');
    }
}
