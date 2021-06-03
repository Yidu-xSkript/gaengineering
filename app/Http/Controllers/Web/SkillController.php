<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class SkillController extends Controller
{
    private $m_skill;
    public function __construct()
    {
        $this->m_skill = new Skill();
    }

    public function index()
    {
        $skills = $this->m_skill->GetSkills();
        return View('post-login.pages.skills.index', compact('skills'));
    }

    private function validate__(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'progress' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate__($request);
        $this->m_skill->CreateSkill($request->name, $request->progress);
        return back()->with('success', 'Skill is successfully created!');
    }

    public function update(Request $request, int $id)
    {
        $this->validate__($request);
        $this->m_skill->UpdateSkill($id, $request->name, $request->progress);
        return back()->with('success', 'Skill is successfully updated!');
    }

    public function destroy(int $id)
    {
        $this->m_skill->DestroySkill($id);
        return back()->with('success', 'Skill is successfully deleted!');
    }
}
