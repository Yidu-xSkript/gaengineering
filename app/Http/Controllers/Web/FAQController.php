<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FAQController extends Controller
{
    private $m_faq;
    public function __construct()
    {
        $this->m_faq = new Faq();
    }

    public function index()
    {
        return View('pre-login.pages.FAQs');
    }

    public function adminIndex()
    {
        return View();
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $this->m_faq->CreateFAQ($request->question, $request->answer);
        return back()->with('success', 'FAQ is successfully created!');
    }

    public function update(Request $request, Int $id)
    {
        $this->validate__($request);
        $this->m_faq->UpdateFAQ($request->question, $request->answer, $id);
        return back()->with('success', 'FAQ is successfully updated!');
    }

    public function destroy(Int $id)
    {
        $this->m_faq->destroyFAQ($id);
        return back()->with('success', 'FAQ is successfully deleted!');
    }
}
