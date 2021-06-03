<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;

class ContactController extends Controller
{
    private $m_contact, $m_setting;
    public function __construct()
    {
        $this->m_contact = new Contact();
        $this->m_setting = new Setting();
    }

    public function index()
    {
        $setting = $this->m_setting->RetrieveSetting();
        return View('pre-login.pages.Contact', compact('setting'));
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

    public function removeContactInfo(int $id)
    {
        $this->m_contact->RemoveContact($id);
        return back()->with('success', 'Contact information is successfully removed!');
    }
}
