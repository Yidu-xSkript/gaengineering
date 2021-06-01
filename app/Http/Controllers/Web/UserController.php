<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    private $m_user;
    public function __construct()
    {
        $this->m_user = new User();
    }

    public function setup()
    {
        return View('post-login.pages.Accounts.update');
    }

    public function index()
    {
        $users = $this->m_user->GetUsersViaRole('content_manager');
        return View('post-login.pages.manager.index', compact('users'));
    }

    public function addManager(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required'
        ]);
        $this->m_user->CreateUser($request->name, $request->email, 'password');
        return back()->with('success', 'user account is successfully created!');
    }

    public function updateManager(Request $request, int $id)
    {
        $this->validate($request, ['email' => 'required|email', 'name' => 'required']);
        if (!is_null($request->password) && $request->password != "")
            $this->validate($request, ['password' => 'required|confirmed']);
        $this->m_user->UpdateUser($id, $request->name, $request->email, $request->password);
        return back()->with('success', 'user account is successfully updated!');
    }

    public function update(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'name' => 'required']);
        if (!is_null($request->password) && $request->password != "")
            $this->validate($request, ['password' => 'required|confirmed']);
        $this->m_user->UpdateUser(auth()->user()->id, $request->name, $request->email, $request->password);
        return back()->with('success', 'user account is successfully updated!');
    }

    public function destroy($id)
    {
        $this->m_user->DestroyAccount($id);
        return back()->with('success', 'User account is successfully removed!');
    }
}
