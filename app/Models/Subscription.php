<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['email'];

    public function CreateSubscription(String $email)
    {
        $this::create(['email' => $email]);
    }

    public function UpdateSubscription(String $email, Int $id)
    {
        $sub = $this::find($id);
        $sub->email = $email;
        $sub->save();
    }

    public function DestroySubscription($id)
    {
        $user = $this::find($id);
        if (!is_null($user)) $user->delete();
    }

    public function GetSubscribers()
    {
        return $this::latest()->get();
    }

    public function GetPaginatedSubscribers()
    {
        return $this::latest()->paginate(12);
    }
}
