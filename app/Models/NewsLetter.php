<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug'];

    public function CreateNewsLetter($title, $slug)
    {
        $this::create([
            'title' => $title,
            'slug' => $slug
        ]);
    }

    public function UpdateNewsLetter($id, $title, $slug)
    {
        $newsLetter = $this::find($id);
        $newsLetter->title = $title;
        $newsLetter->slug = $slug;
        $newsLetter->save();
    }

    public function DestroyNewsLetter($id)
    {
        $this::find($id)->delete();
    }

    public function SendMassEmails($newsLetterID)
    {
        $newsLetter = $this::find($newsLetterID);
        $_subscribers = Subscription::all();
        for ($i = 0; $i < count($_subscribers); $i++) {
            // send newsletter email to subscribers.
            // job queue (DB) needs to be performed.
            // failed jobs need to be viewed.
            // failed jobs need to be re-executed.
        }
    }

    public function SendEmailToSelectedMembers(Subscription $subscribers, $newsLetterID)
    {
        $newsLetter = $this::find($newsLetterID);
        for ($i = 0; $i < count($subscribers); $i++) {
            // send newsletter email to subscribers.
            // job queue (DB) needs to be performed.
            // failed jobs need to be viewed.
            // failed jobs need to be re-executed.
        }
    }

    public function GetNewsLetters()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedNewsLetter()
    {
        return $this::paginate(10)->latest();
    }

    public function ViewNewsLetter($id)
    {
        return $this::find($id);
    }
}
