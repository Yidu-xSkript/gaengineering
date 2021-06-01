<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsLetter;

class NewsletterController extends Controller
{
    private $m_newsletter;
    public function __construct()
    {
        $this->m_newsletter = new NewsLetter();
    }

    public function index()
    {
        $newsletters = $this->m_newsletter->GetNewsLetters();
        return View('post-login.pages.Newsletter.index', compact('newsletters'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $this->m_newsletter->CreateNewsLetter($request->title, $request->slug);
        return back()->with('success', 'Newsletter is successfully created!');
    }

    public function update(Request $request, int $id)
    {
        $this->validate__($request);
        $this->m_newsletter->UpdateNewsLetter($id, $request->title, $request->slug);
        return back()->with('success', 'Newsletter is successfully updated!');
    }

    public function destroy(int $id)
    {
        $this->m_newsletter->DestroyNewsLetter($id);
        return back()->with('success', 'Newsletter is successfully deleted!');
    }
}
