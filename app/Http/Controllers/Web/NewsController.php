<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Traits\CloudinaryTrait;

class NewsController extends Controller
{
    use CloudinaryTrait;
    private $m_news;

    public function __construct()
    {
        $this->m_news = new News();
    }

    public function index()
    {
        return View('pre-login.pages.News.Index');
    }

    public function detail()
    {
        return View('pre-login.pages.News.Detail');
    }

    public function adminIndex()
    {
        return View();
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpg,png,jpeg,svg' : ''
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_news->CreateNews($request->title, $imageURL, $request->slug);
        return back()->with('success', 'News is successfully created!');
    }

    public function update(Request $request, Int $id)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_news->UpdateNews($id, $request->title, $imageURL, $request->slug);
        return back()->with('success', 'News is successfully updated!');
    }

    public function destroy(Int $id)
    {
        $this->m_news->DestroyNews($id);
        return back()->with('success', 'News is successfully deleted!');
    }
}
