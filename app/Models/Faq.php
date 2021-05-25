<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['question', 'answer'];

    public function CreateFAQ($question, $answer)
    {
        $this::create([
            'question' => $question,
            'answer' => $answer
        ]);
    }

    public function updateFAQ($question, $answer, $id)
    {
        $FAQ = $this::find($id);
        $FAQ->question = $question;
        $FAQ->answer = $answer;
        $FAQ->save();
    }

    public function destroyFAQ($id)
    {
        $this::find($id)->delete();
    }

    public function GetFAQ()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedFAQ()
    {
        return $this::paginate(10)->latest();
    }
}
