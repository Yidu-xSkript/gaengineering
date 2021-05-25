<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'subject', 'message'];

    public function ContactGA($name, $email, $subject, $message)
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
