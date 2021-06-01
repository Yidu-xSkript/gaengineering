<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    private $m_contact;
    public function __construct()
    {
        $this->m_contact = new Contact();
    }

    public function index()
    {
        return View('pre-login.pages.Contact');
    }

    public function adminIndex()
    {
        $contacts = $this->m_contact->GetMessages();
        return View('post-login.pages.Contact.index', compact(['contacts']));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);
    }

    public function sendContactMessage(Request $request)
    {
        $this->validate__($request);
        $this->m_contact->ContactGA($request->name, $request->email, $request->subject, $request->message);
        return back()->with('success', 'We have received your message! We will contact you as soon as possible! Thank you');
    }
}
