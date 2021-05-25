<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['email'];

    public function CreateSubscription($email)
    {
        $this::create(['email' => $email]);
    }

    public function UpdateSubscription($email, $id)
    {
        $sub = $this::find($id);
        $sub->email = $email;
        $sub->save();
    }

    public function DestroySubscription($id)
    {
        $this::find($id)->delete();
    }

    public function GetSubscribers()
    {
        return $this::get()->latest();
    }

    public function GetPaginatedSubscribers()
    {
        return $this::paginate(12)->latest();
    }
}
