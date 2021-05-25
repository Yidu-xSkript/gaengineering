<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Traits\CloudinaryTrait;

class TeamController extends Controller
{
    use CloudinaryTrait;
    private $teamModel;

    public function __construct()
    {
        $this->middleware(['auth', 'admin', 'manager'])->except(['index']);
        $this->teamModel = new Team();
    }

    public function index()
    {
        $team = $this->teamModel->GetTeam();
        return View('', compact(['team']));
    }

    public function adminIndex()
    {
        $team = $this->teamModel->GetTeam();
        return View('', compact(['team']));
    }

    public function validate__(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'slug' => 'required',
            'image_url' => !is_null($request->image_url) ? 'required|image|mimes:jpg,png,jpeg,svg' : ''
        ]);
    }

    public function create(Request $request)
    {
        $this->validate__($request);
        $imageURL = $this->UploadImage($request->file('image_url')->getRealPath());
        $this->teamModel->CreateTeam($request->name, $request->position, $request->twitter, $request->facebook, $request->instagram, $request->linked_in, $request->slug, $imageURL);
        return back()->with('success', 'Team member is successfully added!');
    }

    public function update(Request $request, $id)
    {
        $this->validate__($request);
        $imageURL = $this->UploadImage($request->file('image_url')->getRealPath());
        $this->teamModel->UpdateTeam($id, $request->name, $request->position, $request->twitter, $request->facebook, $request->instagram, $request->linked_in, $request->slug, $imageURL);
        return back()->with('success', 'Team member is successfully updated!');
    }

    public function destroy($id)
    {
        $this->teamModel->DestroyTeam($id);
        return back()->with('success', 'Team member is removed!');
    }
}
