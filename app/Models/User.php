<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function CreateUser(String $name, String $email, String $password)
    {
        $this::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => "content_manager"
        ]);
    }

    public function UpdateUser(int $id, String $name, string $email, string $password = null)
    {
        $user = $this::find($id);
        $user->name = $name;
        $user->email = $email;
        if (!is_null($password)) $user->password = bcrypt($password);
        $user->save();
    }

    private function CheckCurrentPassword(string $current_pass, User $user)
    {
        return Hash::check($current_pass, $user->password);
    }

    public function ChangePassword(User $user, string $current_pass, string $new_pass)
    {
        if ($this->CheckCurrentPassword($current_pass, $user)) {
            $user->password = bcrypt($new_pass);
        }
    }

    public function DestroyAccount(int $id)
    {
        $this->find($id)->delete();
    }

    public function hasRole(string $role, int $userId)
    {
        return $this::where('id', $userId)->where('role', $role)->count() == 1 ? true : false;
    }

    public function GetUsersViaRole(string $role)
    {
        return $this::where('role', $role)->get();
    }
}
