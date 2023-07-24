<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AccountModel extends Authenticatable implements JWTSubject
{
    protected $table = 'tb_auth';
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';
    // Add other necessary properties and methods

    // Method to get user by email
    public function getByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
