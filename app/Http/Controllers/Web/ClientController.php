<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Traits\CloudinaryTrait;

class ClientController extends Controller
{
    use CloudinaryTrait;
    private $m_client;

    public function __construct()
    {
        $this->m_client = new Client();
    }

    public function index()
    {
        return View('pre-login.pages.Clients');
    }

    public function adminIndex()
    {
        $clients = $this->m_client->GetClients();
        return View('post-login.pages.Clients.index', compact('clients'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'slug' => 'required',
            'imageURL' => !is_null($request->imageURL) ? 'required|image|mimes:jpg,png,jpeg,svg' : ''
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_client->CreateClient($imageURL, $request->company_name, $request->slug);
        return back()->with('success', 'Client is successfully created!');
    }

    public function update(Request $request, $id)
    {
        $this->validate__($request);
        $imageURL = !is_null($request->imageURL) ?
            $this->UploadImage($request->file('imageURL')->getRealPath()) : null;
        $this->m_client->UpdateClient($id, $imageURL, $request->company_name, $request->slug);
        return back()->with('success', 'Client is successfully updated!');
    }

    public function destroy($id)
    {
        $this->m_client->DestroyClient($id);
        return back()->with('success', 'Client is successfully deleted!');
    }
}
