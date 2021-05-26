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

    public function GetMessages()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedMessages()
    {
        return $this::paginate(10)->latest();
    }
}
