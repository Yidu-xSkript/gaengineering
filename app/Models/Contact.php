<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'subject', 'message'];

    public function ContactGA(String $name, String $email, String $subject, String $message)
    {
        $this::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);
    }

    public function RemoveContact(int $id)
    {
        $this::find($id)->delete();
    }

    public function GetMessages()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedMessages()
    {
        return $this::latest()->paginate(10);
    }
}
