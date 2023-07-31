<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AccountModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'access_auth';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'referral_code', // Add referral_code to the fillable attributes
        'program_id', // Add program_id to the fillable attributes
        'role_id',
        'email',
        'password',
        'status',
        'device_id',
    ];
    public $timestamps = false; // Disable the default timestamps for this model
    
    // Relationship with access_user table
    public function accessUser()
    {
        return $this->hasOne(AccessUser::class, 'user_id', 'user_id');
    }

    // Relationship with AccessRole table
    public function accessRole()
    {
        return $this->belongsTo(AccessRole::class, 'role_id');
    }

    // Method to get user by email with access_user join
    public function getByEmail($email)
    {
        return $this->where('email', $email)
            ->with('accessRole') // Eager load the accessUser relationship
            ->with('accessUser') // Eager load the accessUser relationship
            ->first();
    }

    // Other methods and properties as needed

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}

