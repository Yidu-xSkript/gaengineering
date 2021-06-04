<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SubscriptionController extends Controller
{
    private $m_subscription;
    public function __construct()
    {
        $this->m_subscription = new Subscription();
    }

    public function index()
    {
        $subscribers = $this->m_subscription->GetSubscribers();
        return View('post-login.pages.subscribers.index', compact('subscribers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|unique:subscriptions']);
        $this->m_subscription->CreateSubscription($request->email);
        return back()->with('success', 'Thank you for subscribing.');
    }

    public function destroyIndex(int $id)
    {
        return View('partials.unsubscribe', compact('id'));
    }

    public function removeSubscriber(int $id)
    {
        $this->m_subscription->DestroySubscription($id);
        if (Route::getCurrentRoute()->uri == "unsubscribe/{id}")
            return redirect('/')->with('success', 'Sorry to see you leave. good bye.');
        else
            return back()->with('success', 'Subscriber is removed from email list.');
    }
}
