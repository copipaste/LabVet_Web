<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /** 
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dni',
        'password',
    ];

    /**
     * Relación uno a uno con la tabla `Admin`.
     */
    public function admin()
    {
        return $this->hasOne(Admin::class, 'userId');
    }

    /**
     * Relación uno a uno con la tabla `Client`.
     */
    public function client()
    {
        return $this->hasOne(Client::class, 'userId');
    }

    /**
     * Relación uno a uno con la tabla `Doctor`.
     */
    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'userId');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
