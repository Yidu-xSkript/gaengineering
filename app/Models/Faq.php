<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['question', 'answer'];

    public function CreateFAQ(String $question, String $answer)
    {
        $this::create([
            'question' => $question,
            'answer' => $answer
        ]);
    }

    public function updateFAQ(String $question, String $answer, Int $id)
    {
        $FAQ = $this::find($id);
        $FAQ->question = $question;
        $FAQ->answer = $answer;
        $FAQ->save();
    }

    public function destroyFAQ(Int $id)
    {
        $this::find($id)->delete();
    }

    public function GetFAQ()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedFAQ()
    {
        return $this::latest()->paginate(10);
    }
}
